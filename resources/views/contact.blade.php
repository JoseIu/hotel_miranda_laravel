@extends('layout')

@section('content')
<section class="home-component">
    <div class="home-component__content contact-hero">
        <div class="wrapper">
            <div class="room-home">
                <h2 class="home-component__subtitle title">The Ultimate Luxury</h2>
                <h2 class="home-component__title old">New Details</h2>
            </div>
        </div>
    </div>
</section>

<section class="contacts wrapper">
    <div class="contact__features">
        <!-- THIS IS A COMPONENT -->
        <div class="features__list">
            <!-- 1 -->
            <article class="feature">
                <img class="feature__img" src="./assets/images/footer/location-2.svg" alt="rating icon" loading="lazy" />

                <div class="feature__content">
                    <h3 class="feature__title old">Hotel Address</h3>
                    <p class="feature__desctiption">19/A, Cirikon City hall Tower New York, NYC</p>
                </div>
            </article>
            <!-- 2-->
            <article class="feature">
                <img class="feature__img" src="./assets/images/footer/phone.svg" alt="quiet Hours icon" loading="lazy" />

                <div class="feature__content">
                    <h3 class="feature__title old">Phone Number</h3>
                    <span class="feature__desctiption">+ 97656 8675 7864 7</span>
                    <span class="feature__desctiption">+ 876 766 8675 765 6</span>
                </div>
            </article>
            <!-- 3 -->
            <article class="feature">
                <img class="feature__img" src="./assets/images/footer/email.svg" alt="best location icon" loading="lazy" />

                <div class="feature__content">
                    <h3 class="feature__title old">Email</h3>
                    <span class="feature__desctiption">info@webmail.com</span>
                    <span class="feature__desctiption">jobs.webmail@mail.com</span>
                </div>
            </article>
        </div>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d121193.50620953986!2d-68.89190743907771!3d18.333726907542523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8ea8abd541e1c75f%3A0x6d894f9bbf94a8b0!2sCarr.%20Bayahibe%2C%20Dominicus%2023000%2C%20Rep%C3%BAblica%20Dominicana!3m2!1d18.3337446!2d-68.8095057!5e0!3m2!1ses!2ses!4v1718802629017!5m2!1ses!2ses" width="600" height="600" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<!-- CONTACT FORM -->
<div class="wrapper">
    <form class="form" action="./contact.php" method="POST">
        <div class="form__container">
            <!-- NAME -->
            <div class="form__row">
                <label class="form__label" for="name">
                    <img class="form__icon" src="./assets/images/profile.svg" alt="name icon" />
                </label>

                <input class="form__input" type="text" name="name" id="name" placeholder="Your full name..." />
            </div>
            <!-- EMAIL -->

            <div class="form__row">
                <label class="form__label" for="email">
                    <img class="form__icon" src="./assets/images/footer/email.svg" alt="email icon" />
                </label>

                <input class="form__input" type="email" name="email" id="email" placeholder="Enter email address.." />
            </div>
            <!-- PHONE -->

            <div class="form__row">
                <label class="form__label" for="phone">
                    <img class="form__icon" src="./assets/images/footer/phone.svg" alt="phone icon" />
                </label>

                <input class="form__input" type="number" name="phone" id="phone" placeholder="Add phone number.." />
            </div>
            <!-- SUBJECT -->

            <div class="form__row">
                <label class="form__label" for="subject">
                    <img class="form__icon" src="./assets/images/foods/book.svg" alt="subject icon" />
                </label>

                <input class="form__input" type="text" name="subject" id="subject" placeholder="Enter subject..." />
            </div>
        </div>

        <!-- MESSAGE -->
        <div class="form__row">
            <textarea class="form__input" name="message" id="message" placeholder="Enter message..."></textarea>
        </div>

        <button class="form__btn button" type="submit">send</button>
    </form>
</div>
@endsection