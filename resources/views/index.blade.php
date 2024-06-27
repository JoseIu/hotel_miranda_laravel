@extends('layout')


@section('content')
<section class="home">

  <div class="home__content wrapper">
    <span class="home__subtitle">THE ULTIMATE LUXURY EXPERIENCE</span>
    <h2 class="home__title">The Perfect Base For You</h2>

    <div class="home__tbns">
      <a class="home__btn home__btn--mustard" href="#">Take a Tour</a>
      <a class="home__btn" href="#">Learn more</a>
    </div>
  </div>
</section>
<section class="date">
  <form class="date__form wrapper" action="./index.php" method="POST">
    <div class="date__form-inputs">
      <input class="date__form-input" type="date" name="arrival" id="arrival" />
      <input class="date__form-input" type="date" name="departure" id="departure" />
    </div>
    <button class="date__form-submit" type="submit">Check availability</button>
    <span></span>
  </form>
</section>

<section class="about wrapper">
  <div class="about__content">
    <h2 class="about__subtitle title">About Us</h2>
    <div class="about__bg">
      <h3 class="about__title">Discover Our Underground.</h3>
      <p class="about__description">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      </p>
      <button class="button" aria-label="button to book now">Book Now</button>
    </div>
  </div>

  <div class="about__images">
    <article class="card card--order">
      <img class="card__image card__image--order" src="./assets/images/about.webp" alt="about image" />

      <div class="card__content card__content--bg">
        <img class="card__content-image" src="./assets/images/card-people.svg" alt="people image" />
        <h3 class="card__content-title">Strong Team</h3>
        <p class="card__content-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
        </p>
      </div>
    </article>
    <article class="card">
      <img class="card__image" src="./assets/images/about-2.webp" alt="about image" />

      <div class="card__content card__content--dark">
        <img class="card__content-image" src="./assets/images/calendar.svg" alt="people image" />
        <h3 class="card__content-title">Luxury Room</h3>
        <p class="card__content-description">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
        </p>
      </div>
    </article>
  </div>
</section>

<section class="rooms wrapper">
  <h2 class="rooms__subtitle title">rooms</h2>
  <h3 class="rooms__title">Hand Picked Rooms</h3>

  <!-- Slider main container -->
  <div class="swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      
      <!-- Slides -->
      <!-- <div class="swiper-slide">
        <article class="slider__item">
          <img class="slider__item-img" src="./assets/images/about.webp" loading="lazy" alt="about image" />

          <div class="slider__item-content">
            <ul class="slider__item-list">
              <li class="slider__item-li">
                <img src="./assets/images/rooms/bed.svg" alt="bed icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/wifi.svg" alt="free-wifi icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/car.svg" alt="parking-free icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/snow.svg" alt="snow icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/dumbbells.svg" alt="gym icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cigar.svg" alt="no smoking icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cup.svg" alt="cup icon" />
              </li>
            </ul>
            <div class="slider__item-description">
              <div>
                <h3 class="slider__item-title">Minimal Duplex Room</h3>
                <p class="slider__item-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore.
                </p>
              </div>
              <span class="slider__item-price">$345/Night</span>
            </div>
          </div>
        </article>
      </div>
      <div class="swiper-slide">
        <article class="slider__item">
          <img class="slider__item-img" src="./assets/images/about.webp" loading="lazy" alt="about image" />

          <div class="slider__item-content">
            <ul class="slider__item-list">
              <li class="slider__item-li">
                <img src="./assets/images/rooms/bed.svg" alt="bed icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/wifi.svg" alt="free-wifi icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/car.svg" alt="parking-free icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/snow.svg" alt="snow icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/dumbbells.svg" alt="gym icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cigar.svg" alt="no smoking icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cup.svg" alt="cup icon" />
              </li>
            </ul>
            <div class="slider__item-description">
              <div>
                <h3 class="slider__item-title">Minimal Duplex Room</h3>
                <p class="slider__item-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore.
                </p>
              </div>
              <span class="slider__item-price">$345/Night</span>
            </div>
          </div>
        </article>
      </div>
      <div class="swiper-slide">
        <article class="slider__item">
          <img class="slider__item-img" src="./assets/images/about.webp" loading="lazy" alt="about image" />

          <div class="slider__item-content">
            <ul class="slider__item-list">
              <li class="slider__item-li">
                <img src="./assets/images/rooms/bed.svg" alt="bed icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/wifi.svg" alt="free-wifi icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/car.svg" alt="parking-free icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/snow.svg" alt="snow icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/dumbbells.svg" alt="gym icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cigar.svg" alt="no smoking icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cup.svg" alt="cup icon" />
              </li>
            </ul>
            <div class="slider__item-description">
              <div>
                <h3 class="slider__item-title">Minimal Duplex Room</h3>
                <p class="slider__item-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore.
                </p>
              </div>
              <span class="slider__item-price">$345/Night</span>
            </div>
          </div>
        </article>
      </div>
      <div class="swiper-slide">
        <article class="slider__item">
          <img class="slider__item-img" src="./assets/images/about.webp" loading="lazy" alt="about image" />

          <div class="slider__item-content">
            <ul class="slider__item-list">
              <li class="slider__item-li">
                <img src="./assets/images/rooms/bed.svg" alt="bed icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/wifi.svg" alt="free-wifi icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/car.svg" alt="parking-free icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/snow.svg" alt="snow icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/dumbbells.svg" alt="gym icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cigar.svg" alt="no smoking icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cup.svg" alt="cup icon" />
              </li>
            </ul>
            <div class="slider__item-description">
              <div>
                <h3 class="slider__item-title">Minimal Duplex Room</h3>
                <p class="slider__item-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore.
                </p>
              </div>
              <span class="slider__item-price">$345/Night</span>
            </div>
          </div>
        </article>
      </div>
      <div class="swiper-slide">
        <article class="slider__item">
          <img class="slider__item-img" src="./assets/images/about.webp" loading="lazy" alt="about image" />

          <div class="slider__item-content">
            <ul class="slider__item-list">
              <li class="slider__item-li">
                <img src="./assets/images/rooms/bed.svg" alt="bed icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/wifi.svg" alt="free-wifi icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/car.svg" alt="parking-free icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/snow.svg" alt="snow icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/dumbbells.svg" alt="gym icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cigar.svg" alt="no smoking icon" />
              </li>
              <li class="slider__item-li">
                <img src="./assets/images/rooms/cup.svg" alt="cup icon" />
              </li>
            </ul>
            <div class="slider__item-description">
              <div>
                <h3 class="slider__item-title">Minimal Duplex Room</h3>
                <p class="slider__item-text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore.
                </p>
              </div>
              <span class="slider__item-price">$345/Night</span>
            </div>
          </div>
        </article>
      </div> -->
    </div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev">
      <img class="slider__arrow" src="./assets/images/rooms/arrow-left.svg" alt="arrow icon" loading="lazy" />
    </div>
    <div class="swiper-button-next">
      <img class="slider__arrow" src="./assets/images/rooms/arrow-right.svg" alt="arrow icon" loading="lazy" />
    </div>
  </div>
</section>

<section class="intro">
  <div class="intro__container wrapper">
    <div class="intro__content">
      <h2 class="intro__subtitle">Intro video</h2>
      <h3 class="intro__title">Meet With Our Luxury Place.</h3>
      <p class="intro__description">
        pLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to
        understand this.
      </p>
      <button class="intro__button intro__button--hidden">Book Now</button>
    </div>
    <video class="intro__video" src="./assets/videos/hotel_miranda.mp4" controls></video>
    <button class="intro__button">Book Now</button>
  </div>
</section>

<section class="features wrapper2">
  <h2 class="features__subtitle title">Facilities</h2>
  <h3 class="features__title old">Core Features</h3>

  <div class="features__list">
    <!-- 1 -->
    <article class="feature">
      <img class="feature__img" src="./assets/images/features/starts.svg" alt="rating icon" loading="lazy" />

      <div class="feature__content">
        <h3 class="feature__title old">Have High Rating</h3>
        <p class="feature__desctiption">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..
        </p>
      </div>
    </article>
    <!-- 2-->
    <article class="feature">
      <img class="feature__img" src="./assets/images/features/clock.svg" alt="quiet Hours icon" loading="lazy" />

      <div class="feature__content">
        <h3 class="feature__title old">Quiet Hours</h3>
        <p class="feature__desctiption">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..
        </p>
      </div>
    </article>
    <!-- 3 -->
    <article class="feature">
      <img class="feature__img" src="./assets/images/features/location.svg" alt="best location icon" loading="lazy" />

      <div class="feature__content">
        <h3 class="feature__title old">Best Locations</h3>
        <p class="feature__desctiption">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..
        </p>
      </div>
    </article>
    <!-- 4-->
    <article class="feature">
      <img class="feature__img" src="./assets/images/features/clock-cross.svg" alt="free Cancellation icon" loading="lazy" />

      <div class="feature__content">
        <h3 class="feature__title old">Free Cancellation</h3>
        <p class="feature__desctiption">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..
        </p>
      </div>
    </article>
    <!-- 5 -->
    <article class="feature">
      <img class="feature__img" src="./assets/images/features/credit.svg" alt="payment card icon" loading="lazy" />

      <div class="feature__content">
        <h3 class="feature__title old">Payment Options</h3>
        <p class="feature__desctiption">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..
        </p>
      </div>
    </article>
    <!-- 6 -->
    <article class="feature">
      <img class="feature__img" src="./assets/images/features/offer.svg" alt="Special Offers icon" loading="lazy" />

      <div class="feature__content">
        <h3 class="feature__title old">Special Offers</h3>
        <p class="feature__desctiption">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna..
        </p>
      </div>
    </article>
  </div>
</section>

<section class="foods wrapper">
  <div class="foods__containe wrapper2">
    <h2 class="foods__subtitle title">menu</h2>
    <h3 class="foods__title old">Our Foods Menu</h3>
    <!-- slider -->
    <div class="foods__list">
      <!-- 1-->
      <article class="food">
        <img class="food__img" src="./assets/images/foods/food-1.webp" loading="lazy" alt="food" />
        <div class="food__content">
          <h2 class="food__title old">Eggs & Bacon</h2>
          <p class="food__description">
            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
          </p>
        </div>
      </article>
      <!-- 2 -->
      <article class="food">
        <img class="food__img" src="./assets/images/foods/food-2.webp" loading="lazy" alt="food" />
        <div class="food__content">
          <h2 class="food__title old">Fruit Parfait</h2>
          <p class="food__description">
            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
          </p>
        </div>
      </article>
      <!-- 3-->
      <article class="food">
        <img class="food__img" src="./assets/images/foods/food-3.webp" loading="lazy" alt="food" />
        <div class="food__content">
          <h2 class="food__title old">Tea or Coffee</h2>
          <p class="food__description">
            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
          </p>
        </div>
      </article>
      <!-- 4 -->
      <article class="food">
        <img class="food__img" src="./assets/images/foods/food-4.webp" loading="lazy" alt="food" />
        <div class="food__content">
          <h2 class="food__title old">Marmalade Selection</h2>
          <p class="food__description">
            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
          </p>
        </div>
      </article>
      <!-- 5-->
      <article class="food">
        <img class="food__img" src="./assets/images/foods/food-5.webp" loading="lazy" alt="food" />
        <div class="food__content">
          <h2 class="food__title old">Chia Oatmeal</h2>
          <p class="food__description">
            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
          </p>
        </div>
      </article>
      <!-- 6 -->
      <article class="food">
        <img class="food__img" src="./assets/images/foods/food-6.webp" loading="lazy" alt="food" />
        <div class="food__content">
          <h2 class="food__title old">Cheese Plate</h2>
          <p class="food__description">
            Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
          </p>
        </div>
      </article>
    </div>
  </div>

  <!-- TOODO: SLIDER? -->
  <div class="foods__images wrapper2">
    <div class="foods__slider">
      <ul class="foods__images-list">
        <li class="foods__images-item">
          <img class="foods__images-img" src="./assets/images/foods/food-1.webp" alt="image food" loading="lazy" />
        </li>
        <li class="foods__images-item">
          <img class="foods__images-img" src="./assets/images/foods/food-2.webp" alt="image food" loading="lazy" />
        </li>
        <li class="foods__images-item">
          <img class="foods__images-img" src="./assets/images/foods/food-3.webp" alt="image food" loading="lazy" />
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- BENEFIES -->
<div class="benefies wrapper2">
  <div class="benefies__list">
    <!-- 1 -->
    <article class="benefie">
      <img class="benefie__img" src="./assets/images/foods/rocket.svg" alt="benefies rocket image" loading="lazy" />

      <div class="benefie__content">
        <h2 class="benefie__title">84K</h2>
        <span class="benefie__subtitle">Projects are Completed</span>
      </div>
    </article>
    <!-- 2-->

    <article class="benefie">
      <img class="benefie__img" src="./assets/images/foods/people.svg" alt="benefies rocket image" loading="lazy" />

      <div class="benefie__content">
        <h2 class="benefie__title">10M+</h2>
        <span class="benefie__subtitle">Active Backers Around World</span>
      </div>
    </article>
    <!-- 3 -->
    <article class="benefie">
      <img class="benefie__img" src="./assets/images/foods/grafic.svg" alt="benefies rocket image" loading="lazy" />

      <div class="benefie__content">
        <h2 class="benefie__title">02K+</h2>
        <span class="benefie__subtitle">Idea Raised Funds</span>
      </div>
    </article>
    <!-- 4 -->
    <article class="benefie">
      <img class="benefie__img" src="./assets/images/foods/book.svg" alt="benefies rocket image" loading="lazy" />

      <div class="benefie__content">
        <h2 class="benefie__title">100Mk+</h2>
        <span class="benefie__subtitle">Categories Served</span>
      </div>
    </article>
  </div>
</div>
@endsection