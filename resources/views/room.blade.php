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
<section class="wrapper2">
  <div class="rooms__actions">
    <button class="rooms__action rooms__action--active toogle-grid">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="rooms__action-icon" viewBox="0 0 16 16">
        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z" />
      </svg>
    </button>
    <button class="rooms__action toogle-list">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="rooms__action-icon" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
      </svg>
    </button>
  </div>

  <section class="rooms-grid">

  @foreach ($rooms as $room)
    <article class="room">
      <a href="room_details?room={{ $room->_id }}">
        <img class="room__img" src="{{ $room->images->first()->image }}" alt="room" />
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
        <h3 class="room__title old">{{ $room->room_type }}</h3>
        <p class="room__description roboto">
          Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.
        </p>
        <div>
          <span class="room__price">${{$room->price}}/Night</span>
          <button class="room__booking">Booking Now</button>
        </div>
      </div>
    </article>

  @endforeach
  </section>
</section>



@endsection

