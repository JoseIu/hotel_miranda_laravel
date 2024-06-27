@extends('layout')

@section('content')
<section class="home-component">
    <div class="home-component__content rooms-list">
        <div class="wrapper">
            <div class="room-home">
                <h2 class="home-component__subtitle title">The Ultimate Luxury</h2>
                <h2 class="home-component__title old">Ultimate Room</h2>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="room-details">
        <div class="room-detail">
            <img class="room-detail__image" src="{{ $roomdetails['images'][0] }}" alt="room" />
            <div class="room-detail__info">
                <div>
                    <span class="subtitle">Double Bed</span>
                    <h2 class="room-detail__title old">Luxury Double Bed</h2>
                </div>
                <span class="room-detail__price">$345/night</span>
            </div>
        </div>
        <form class="room-form" action="./room_details.php?room={{ $roomdetails['_id'] }}" method="POST">
            <div class="room-form__row">
                <label for="name">Name</label>
                <input class="room-form__input" type="text" name="name" id="name" placeholder="your name.." />
            </div>
            <div class="room-form__row">
                <label for="last_name">Las Name</label>
                <input type="text" name="last_name" id="last_name" placeholder="your name.." />
            </div>
            <div class="room-form__row">
                <label for="check_in">Check In</label>
                <input class="room-form__input" type="date" name="check_in" id="check_in" />
            </div>
            <div class="room-form__row">
                <label for="check_out">Check out</label>
                <input type="date" name="check_out" id="check_out" />
            </div>
            <div class="room-form__row">
                <label for="special_request">Special Request</label>
                <textarea class="room-form__input" name="special_request" id="special_request"></textarea>
            </div>

            <button class="room-form__btn button" type="submit">Book now</button>
        </form>
    </div>
    <div class="room-description">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo
            inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur
            magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
            dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam
            eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </p>
        <ul class="offer__aminities roboto">
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/snow.svg" alt="icon Air conditioner " />
                <span>Air conditioner</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/wifi.svg" alt="icon free wifi" />
                <span>High speed WiFi</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/wifi.svg" alt="icon free wifi" />
                <span>Breakfast</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/kitchen.svg" alt="icon kitchen" />
                <span>Kitchen</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/cleaning.svg" alt="icon cleaning" />

                <span>Cleaning</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/shower.svg" alt="icon shower" />

                <span>Shower</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/grocery.svg" alt="icon grocery" />
                <span>Grocery</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/bed.svg" alt="icon bed" />
                <span>Single bed</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/shop.svg" alt="icon Shop" />
                <span>Shop near</span>
            </li>
            <li class="offer__aminitie">
                <img class="offer__icon" src="./assets/images/rooms/towels.svg" alt="icon towels" />
                <span>Towels</span>
            </li>
        </ul>
    </div>

    <div class="room-founder">
        <article class="founder">
            <div class="founder__img">
                <img src="./assets/images/founder.webp" alt="founder" />
            </div>
            <div class="founder__info">
                <h2 class="founder__title title">Donald H. Hilixer</h2>
                <span class="founder__subtitle subtitle">Founder, Hilix</span>
                <p class="founder__description">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore.
                </p>
            </div>
        </article>

        <div class="room-cancellation">
            <h3 class="room-cancellation__title old">Cancellation</h3>
            <p class="room-cancellation__decription roboto">
                Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus
                mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu
                dolor. Cancel up to 14 days to get a full refund.
            </p>
        </div>
    </div>
</section>

<section class="related-rooms wrapper">
    <h2 class="related-rooms__title old">Related Rooms</h2>
    <div class="rooms-grid">
        <article class="room">
            <a href="./room_details.html">
                <img class="room__img" src="./assets/images/room/room.webp" alt="room" />
            </a>
            <div class="room__content">
                <ul class="room__list">
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/bed.svg" alt="room bed icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/wifi.svg" alt="room wifi icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/car.svg" alt="room car icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/snow.svg" alt="room snow icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/dumbbells.svg" alt="room dumbbells icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/cigar.svg" alt="room no-smoking icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/cup.svg" alt="room cup icon" />
                    </li>
                </ul>
                <h3 class="room__title old">Minimal Duplex Room</h3>
                <p class="room__description roboto">
                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                </p>
                <div>
                    <span class="room__price">$345/Night</span>
                    <button class="room__booking">Booking Now</button>
                </div>
            </div>
        </article>
        <article class="room">
            <a href="./room_details.html">
                <img class="room__img" src="./assets/images/room/room.webp" alt="room" />
            </a>

            <div class="room__content">
                <ul class="room__list">
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/bed.svg" alt="room bed icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/wifi.svg" alt="room wifi icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/car.svg" alt="room car icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/snow.svg" alt="room snow icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/dumbbells.svg" alt="room dumbbells icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/cigar.svg" alt="room no-smoking icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/cup.svg" alt="room cup icon" />
                    </li>
                </ul>
                <h3 class="room__title old">Minimal Duplex Room</h3>
                <p class="room__description roboto">
                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                </p>
                <div>
                    <span class="room__price">$345/Night</span>
                    <button class="room__booking">Booking Now</button>
                </div>
            </div>
        </article>
        <article class="room">
            <a href="./room_details.html">
                <img class="room__img" src="./assets/images/room/room.webp" alt="room" />
            </a>

            <div class="room__content">
                <ul class="room__list">
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/bed.svg" alt="room bed icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/wifi.svg" alt="room wifi icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/car.svg" alt="room car icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/snow.svg" alt="room snow icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/dumbbells.svg" alt="room dumbbells icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/cigar.svg" alt="room no-smoking icon" />
                    </li>
                    <li class="room__li">
                        <img class="room__icon" src="./assets/images/rooms/cup.svg" alt="room cup icon" />
                    </li>
                </ul>
                <h3 class="room__title old">Minimal Duplex Room</h3>
                <p class="room__description roboto">
                    Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
                </p>
                <div>
                    <span class="room__price">$345/Night</span>
                    <button class="room__booking">Booking Now</button>
                </div>
            </div>
        </article>
    </div>
</section>



@endsection