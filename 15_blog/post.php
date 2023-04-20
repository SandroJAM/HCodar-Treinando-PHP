<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {

        if($post['id'] == $postId) {
            $currentPost = $post;
        }

    }

  }
?>
<!-- <h1><?= $currentPost['title'] ?></h1> ------ 'title' vem de posts.php  -->
<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita in vel error
            quis laborum quia natus eveniet incidunt delectus, corporis cumque laudantium eos molestias vero enim
            perspiciatis itaque beatae?
            Numquam error quis quas quo ullam recusandae minus autem aut reprehenderit repudiandae! Eius impedit maiores
            suscipit culpa, vitae, sunt maxime fugiat iusto, molestias inventore assumenda modi perspiciatis soluta
            dolor voluptates?
            Culpa laborum voluptatibus sit nemo aliquid non eaque illum. Aspernatur, error quis incidunt vero facere cum
            fuga quidem nam, dolorum dignissimos aut eum quos rem repellendus ullam nulla, optio corrupti?
            Aperiam ratione autem amet? Pariatur, molestiae. Corporis porro accusamus repellendus pariatur natus
            suscipit maxime, officiis optio numquam nobis deserunt delectus iusto quos aspernatur. Nobis ipsam inventore
            praesentium suscipit totam impedit.
            Aliquid optio, hic tempora amet explicabo fugiat culpa. Illum sapiente deserunt nisi recusandae vero,
            excepturi quasi optio rem necessitatibus, quia odio eum aspernatur dignissimos, molestiae harum soluta.
            Quidem, recusandae perferendis!</p>
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita in vel error
            quis laborum quia natus eveniet incidunt delectus, corporis cumque laudantium eos molestias vero enim
            perspiciatis itaque beatae?
            Numquam error quis quas quo ullam recusandae minus autem aut reprehenderit repudiandae! Eius impedit maiores
            suscipit culpa, vitae, sunt maxime fugiat iusto, molestias inventore assumenda modi perspiciatis soluta
            dolor voluptates?
            Culpa laborum voluptatibus sit nemo aliquid non eaque illum. Aspernatur, error quis incidunt vero facere cum
            fuga quidem nam, dolorum dignissimos aut eum quos rem repellendus ullam nulla, optio corrupti?
            Aperiam ratione autem amet? Pariatur, molestiae. Corporis porro accusamus repellendus pariatur natus
            suscipit maxime, officiis optio numquam nobis deserunt delectus iusto quos aspernatur. Nobis ipsam inventore
            praesentium suscipit totam impedit.
            Aliquid optio, hic tempora amet explicabo fugiat culpa. Illum sapiente deserunt nisi recusandae vero,
            excepturi quasi optio rem necessitatibus, quia odio eum aspernatur dignissimos, molestiae harum soluta.
            Quidem, recusandae perferendis!</p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
            <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>

<?php
  include_once("templates/footer.php");
?>