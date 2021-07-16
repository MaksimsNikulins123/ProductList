<?php $this->view("header", $data );?>

            <main class="main">
                <div class="main__container _container">
                    <div class="main__wrapper">
                        <div class="main__content content">
                            <div class="content__title">Subscribe to newsletter</div>
                            <div class="content__text">Subscribe to our newsletter and get 10% discount on pineapple glasses.</div>
                            <form method="POST" id="form" class="content__form form-content"  onSubmit="if (this.email.value == '') {return false;}">
                                <div class="form-content__input">
                                    <input autocomplete="off" type="email" name="email" class="input" id="email" placeholder="Type your email address here…"   onchange="validation(this.value)" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                    <button type="submit" class="form-content__btn"><img src="" alt="" class="svg-button"></button>
                                </div>
                                <span class="error" aria-live="polite">
                                <?php
                                check_message();
                                ?>
                                </span>

                               

                                <div class="form-content__checkbox checkbox-content">
                                    <label class="checkbox-content__label checkbox">
                                      
                                        <input  class="checkbox-content__input" name="checkbox" type="checkbox" required >
                                        <span class="checkbox-content__text"><span>I agree to <span class="underline">terms of service</span></span></span>
                                    </label>
                                </div>
                            </form>
                        </div>

                        <?php $this->view("footer", $data );?>
                        