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
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>   
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, quod optio. Laudantium minus ex vero cupiditate aspernatur corrupti quo inventore similique magni dignissimos autem nulla accusantium in, ducimus, molestias facilis.
            Adipisci minus quam totam quis soluta accusamus expedita dolorem, eius vero cum maxime at! Impedit magni numquam dolores nam maxime delectus perspiciatis consectetur. Vel libero pariatur accusantium at reiciendis saepe?
            Eum distinctio culpa sunt, natus amet nesciunt explicabo vel magni autem nihil numquam ipsa maiores porro exercitationem eligendi laborum cumque saepe rerum iste! Esse corporis laboriosam neque excepturi! Minus, tenetur.
            Ipsam, nulla eaque quod dignissimos dolore, deleniti quam fugiat sit placeat pariatur, officiis perferendis. Unde ullam, rem quasi ad temporibus, error, quaerat repudiandae possimus pariatur sed ipsam modi quidem mollitia!
            Rem voluptatibus sapiente, ipsa tenetur porro, saepe odit facilis dolor provident maiores aliquid. Omnis, minus fugit. Incidunt, ipsum consequatur aut itaque ipsa quibusdam mollitia, laborum quasi at architecto eligendi sit?</p>   
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, quod optio. Laudantium minus ex vero cupiditate aspernatur corrupti quo inventore similique magni dignissimos autem nulla accusantium in, ducimus, molestias facilis.
            Adipisci minus quam totam quis soluta accusamus expedita dolorem, eius vero cum maxime at! Impedit magni numquam dolores nam maxime delectus perspiciatis consectetur. Vel libero pariatur accusantium at reiciendis saepe?
            Eum distinctio culpa sunt, natus amet nesciunt explicabo vel magni autem nihil numquam ipsa maiores porro exercitationem eligendi laborum cumque saepe rerum iste! Esse corporis laboriosam neque excepturi! Minus, tenetur.
            Ipsam, nulla eaque quod dignissimos dolore, deleniti quam fugiat sit placeat pariatur, officiis perferendis. Unde ullam, rem quasi ad temporibus, error, quaerat repudiandae possimus pariatur sed ipsam modi quidem mollitia!
            Rem voluptatibus sapiente, ipsa tenetur porro, saepe odit facilis dolor provident maiores aliquid. Omnis, minus fugit. Incidunt, ipsum consequatur aut itaque ipsa quibusdam mollitia, laborum quasi at architecto eligendi sit?</p>  
        </div>
        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach?>
            </ul>
        </aside>
    </main>
<?php
    include_once("templates/footer.php")
?>