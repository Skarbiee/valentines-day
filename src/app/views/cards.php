<div class="cards-heart">

    <div class="heart-container">
        <img src="data:image/png;base64,<?= base64_encode(file_get_contents('assets/imgs/hearts-cards.png')); ?> "
            alt="Exemple d'image" class="hearts-cards">
        <div class="heart-text">
            <span><i class="fa-solid fa-heart" style="color: #e3252f;">&nbsp;</i>23442</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span><i class="fa-regular fa-comment">&nbsp;</i>43252</span>
        </div>
    </div>

    <h3 class="cards-title">Every great love starts with a great story...</h3>
    <p class="cards-text">Mine start with you</p>
</div>

<?php
include '../app/views/poem.php';
