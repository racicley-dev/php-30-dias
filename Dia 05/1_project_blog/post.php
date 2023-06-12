<?php 
    include_once('templates/header.php');
    
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post){
            if($postId == $post['id']){
                $currentPost = $post;   
            }
        }
        //echo $_GET['id'];   
        //print_r($currentPost);
    }


?>

    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title">
                <?= $currentPost['title']; ?>
            </h1>
            <p id="post-description">
                <?= $currentPost['description']; ?>
            </p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content"><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est culpa neque vero facere quod esse quos vitae quae impedit libero, et placeat, cumque excepturi error eos fugiat obcaecati hic officiis.</span><span>Assumenda obcaecati, at beatae deleniti, nobis ratione consequuntur eveniet enim repellendus voluptate omnis provident vitae. Velit in perferendis rerum aliquam minus. Enim autem optio exercitationem odit nesciunt unde dolor illum?</span><span>Illo officiis iste distinctio quod neque repellat nemo iusto placeat quaerat dolores. Amet temporibus in repudiandae doloribus culpa perspiciatis, sunt assumenda nobis ut aspernatur. Voluptatibus quos illum incidunt dolor illo.</span><span>Nisi atque, placeat debitis quis sapiente tempora at, voluptatum molestias perspiciatis dolorum impedit quia minus quaerat in fuga totam veniam sint doloribus error provident reiciendis mollitia nobis repellat amet. Rem?</span><span>Laborum doloremque, libero, modi ipsa nulla id molestias, dolorum maiores exercitationem repellat fugiat soluta in vero illum perspiciatis harum quasi officiis nemo ipsam ea! Aliquam atque ipsa sunt explicabo possimus.</span></p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">
            Tags
        </h3>
        <ul id="tags-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li> 
            <?php endforeach; ?>
        </ul>

        <h3 id="categories-title">
            Categorias
        </h3>
        <ul id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li> 
            <?php endforeach; ?>
        </ul>        
    </aside>
    </main>

<?php 
    include_once('templates/footer.php'); 
?>