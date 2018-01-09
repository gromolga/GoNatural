<?php
/**
 * Template Name: Анкета
 */
?>

<?php get_header(); ?>

<div class="anketa">
    <div class="wrapper">
        <div class="anketa-ribbon">
            <div class="anketa-ribbon-box">
                <span class="anketa-ribbon-box-content">Пройдiть тест</span>
            </div>
            <div class="anketa-ribbon-content">
                <span class="what-is">який корм</span>
                <span class="right-food">найкраще пiдiйде</span>
                <span class="for-my-pet"><span class="for">для</span> мого улюбленця?</span>
            </div>
        </div>
        <div class="anketa-questions">
            <div class="anketa-questions-txt">
                Коли моя тваринка зголоднiла я чую:
            </div>
            <div class="anketa-questions-img">
                <div class="anketa-questions-img-box">
                    <img src="<?php echo gd_get_img('/mono-color-icons/cat.png') ?>" alt="">
                </div>
                <div class="anketa-questions-img-box">
                    <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="anketa-name" style="background-color: orangered">
    <div class="wrapper">
        <p>Question 2 of 8</p>
        <h1 class="h1">My pet's name is:</h1>
        <input type="text" placeholder="Enter your pet's name" class="anketa-name-input">
    </div>
</div>


<div class="anketa" style="background-color: orangered">
    <div class="wrapper">
        <p>Question 2 of 8</p>
        <h1 class="h1">My pet's name is:</h1>
        <input type="text" placeholder="Enter your pet's name" class="anketa-name-input">
    </div>
</div>


<?php get_footer(); ?>
