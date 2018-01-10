<?php
/**
 * Template Name: Анкета
 */
?>

<?php get_header(); ?>

<div class="anketa">
    <div class="close"></div>
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
                <div class="anketa-questions-img-box-wrapper anketa-questions-img-box-wrapper-small">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/cat.png') ?>" alt="">
                    </div>
                    <span>Гав!</span>
                </div>
                <div class="anketa-questions-img-box-wrapper anketa-questions-img-box-wrapper-small">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Мяу!</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="anketa-name">
    <div class="close"></div>
    <div class="wrapper">
        <p>Запитання 2 з 8</p>
        <h1 class="h1 anketa-custom-header">Iм'я мого улюбленця:</h1>
        <input type="text" placeholder="Enter your pet's name" class="anketa-name-input">
        <div class="anketa-name-submit">
            <button type="submit" class="anketa-name-submit-box">Наступне запитання</button>
        </div>
    </div>
</div>

<div class="anketa">
    <div class="close"></div>
    <div class="wrapper">
        <div class="anketa-wrapper-centered">
            <p>Запитання 3 з 8</p>
            <h1 class="h1 anketa-custom-header">Пол Китти:</h1>
            <div class="anketa-questions-img">
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/cat.png') ?>" alt="">
                    </div>
                    <span>Дiвчинка</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Хлопчик</span>
                </div>
            </div>
            <div class="anketa-name-submit">
                <button type="submit" class="anketa-name-submit-box">Наступне запитання</button>
            </div>
        </div>
    </div>
</div>


<div class="anketa">
    <div class="close"></div>
    <div class="wrapper">
        <div class="anketa-wrapper-centered">
            <p>Запитання 4 з 8</p>
            <h1 class="h1 anketa-custom-header">Вiк Китти:</h1>
            <div class="anketa-questions-img">
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/cat.png') ?>" alt="">
                    </div>
                    <span>Кошеня</span>
                    <span>2 - 12 мiсяцiв</span>
                </div>
               <div class="anketa-questions-img-box-wrapper">
                   <div class="anketa-questions-img-box">
                       <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                   </div>
                   <span>Молодий вiк</span>
                   <span>1 - 7 рокiв</span>
               </div>
               <div class="anketa-questions-img-box-wrapper">
                   <div class="anketa-questions-img-box">
                       <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                   </div>
                   <span>Похилий вiк</span>
                   <span>7 рокiв +</span>
               </div>
            </div>
            <div class="anketa-name-submit">
                <button type="submit" class="anketa-name-submit-box">Наступне запитання</button>
            </div>
        </div>
    </div>
</div>

<div class="anketa">
    <div class="close"></div>
    <div class="wrapper">
        <div class="anketa-wrapper-centered">
            <p>Запитання 5 з 8</p>
            <h1 class="h1 anketa-custom-header">Потрiбно:</h1>
            <div class="anketa-questions-img">
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/cat.png') ?>" alt="">
                    </div>
                    <span>Набрати вагу</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Зберегти вагу</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Скинути вагу</span>
                </div>
            </div>
            <div class="anketa-name-submit">
                <button type="submit" class="anketa-name-submit-box">Наступне запитання</button>
            </div>
        </div>
    </div>
</div>



<div class="anketa">
    <div class="close"></div>
    <div class="wrapper">
        <div class="anketa-wrapper-centered">
            <p>Запитання 6 з 8</p>
            <h1 class="h1 anketa-custom-header">Рiвень активностi Китти:</h1>
            <div class="anketa-questions-img">
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/cat.png') ?>" alt="">
                    </div>
                    <span>Малий рiвень</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Середнiй рiвень активностi</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Високий рiвень активностi</span>
                </div>
            </div>
            <div class="anketa-name-submit">
                <button type="submit" class="anketa-name-submit-box">Наступне запитання</button>
            </div>
        </div>
    </div>
</div>



<div class="anketa">
    <div class="close"></div>
    <div class="wrapper">
        <div class="anketa-wrapper-centered">
            <p>Запитання 7 з 8</p>
            <h1 class="h1 anketa-custom-header">Який стан здоров'я Китти:</h1>
            <div class="anketa-questions-img">
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/cat.png') ?>" alt="">
                    </div>
                    <span>Проблеми з серцем</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Проблеми з суглобами</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Проблеми зi шлунком або травленням</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Харчова чутливiсть або алергія</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Волосянi шари</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Проблеми зi шкiрою чи хутром</span>
                </div>
                <div class="anketa-questions-img-box-wrapper">
                    <div class="anketa-questions-img-box">
                        <img src="<?php echo gd_get_img('/mono-color-icons/dog.png') ?>" alt="">
                    </div>
                    <span>Чудооово</span>
                </div>
            </div>
            <div class="anketa-name-submit">
                <button type="submit" class="anketa-name-submit-box">Наступне запитання</button>
            </div>
        </div>
    </div>
</div>


<div class="anketa-answer">
    <div class="start-over"></div>
    <div class="wrapper">
        <h1 class="h1">Тримайте хвостик Китти радiсно пiднятим з цим здоровим харчуванням.</h1>
        <p>С цим кормом, Китти буде вiдчувати себе комфортно i радicно.</p>



        <div class="product-navigation-right-col-btn">
            <a href="#">Де купити</a>
        </div>


    </div>
</div>

<?php get_footer(); ?>
