<?php
ob_start();
$title = 'Nos recommandation';
require_once 'config/database.php';

global $db;
$query = $db->prepare('SELECT * FROM avis');
$query->execute();
$avis = $query->fetch(); 

require __DIR__ . '/partials/header.php';

?>

<div class="container mt-2 mb-5">

    <div class="card shadow mt-5">
        <div class="card-body">
            <div class="row">
                <?php
                $query = $db->prepare('SELECT * FROM avis HAVING publie = 1 ORDER BY date DESC LIMIT 9');
                $query->execute();
                $comments = $query->fetchAll();

                foreach ($comments as $comment) {
                ?>
                    <div class="col-sm-4">

                        <div class="mb-3">
                            <p class="mb-0">
                                <strong><?= $comment['pseudo']; ?></strong>
                                <span class="small-text">
                                    le <?= formatDate($comment['date'], '%d/%m/%Y'); ?>
                                </span>
                            </p>
                            <p>
                                <?= $comment['comment']; ?>
                                <br>
                                <?= $comment['note']; ?>/5
                            </p>
                        </div>
                        <hr />
                    </div>

                <?php } 
                ?>
            </div>
            <?php
            $pseudo = $_POST['pseudo'] ?? null;
            $comments = $_POST['comment'] ?? null;
            $note = $_POST['note'] ?? null;
            $errors = [];

            if (!empty($_POST) && isset($_POST['comment'])) {
                $pseudo = htmlspecialchars($_POST['pseudo']); 
                $comments = htmlspecialchars($_POST['comment']); 

                if (empty($pseudo)) {
                    $errors['pseudo'] = 'Le pseudonyme est vide';
                }

                if (strlen($comments) < 1) {
                    $errors['comment'] = 'Le commentaire est trop court';
                }

                if ($note < 0 || $note > 5) {
                    $errors['note'] = 'La note n\'est pas correcte';
                }

                if (empty($errors)) {

                    $query = $db->prepare(
                        'INSERT INTO `avis` (`pseudo`, `comment`, `note`, `date`)
                                     VALUES (:pseudo, :comment, :note, NOW())'
                    );

                    $query->execute([
                        ':pseudo' => $pseudo,
                        ':comment' => $comments,
                        ':note' => $note,
                    ]); 
                    header('Location: avis.php');
                } else {

                    echo '<div class="container alert alert-danger">';
                    foreach ($errors as $error) {
                        echo '<p class="text-danger m-0">' . $error . '</p>';
                    }
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>
    
    <div class="card shadow mt-5">
        <div class="container mt-2 mb-5">
            <form method="POST" class="was-validated" name="avis">
                <label for="pseudo" class="form-label">Pseudo</label>
                <input type="text" name="pseudo" id="pseudo" class="form-control is-invalid" required value="<?= $pseudo; ?>"> <br />

                <label for="message">Votre commentaire</label>
                <textarea name="comment" id="comment" class="form-control is-invalid" required rows="3"><?= $comments; ?></textarea> <br />

                <label for="note">Note</label>
                <select name="note" id="note" required class="form-control">
                <option value="" selected>Mettez une note à votre restaurant entre 0 et 5</option>
                    <?php for ($i = 0; $i <= 5; $i++) { ?>
                        <option value="<?= $i; ?>" <?= $note == $i ? : ''; ?>>
                            <?= $i; ?>/5
                        </option>
                    <?php } ?>
                </select> <br />

                <button class="btn btn-success btn-block" name="avis">Envoyer</button>
            </form>
            <div class="row">
                <div class="col-7"></div>

                <?php
                $query = $db->prepare(
                    'SELECT AVG(note) FROM `avis` WHERE publie = 1'
                );
                $query->execute([':note' => $note]);
                $averageAvis = $query->fetchColumn();
                ?>

                <div class="col-5"> Nous avons une moyenne de <?php echo number_format($averageAvis, 1, ',', ' '); ?>/5 </div>
            </div>
        </div>
    </div>
</div>




<?php require 'partials/footer.php'; ?>