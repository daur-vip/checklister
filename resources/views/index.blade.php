@extends('layouts.front')

@section('content')
    <section class="slider">
        <div class="slider-content">
            <h1 class="slider-title">
                МY FLAT -<br />
                недвижимость в Турции
            </h1>
            <hr class="slider-hr">
            <p class="slider-text">Отличное решение для комфортной жизни и выгодного инвестирования!</p>
            <img src="/img/slider-button.png" alt="Оставить заявку">
        </div>
    </section>


    <section id="services" class="services smt">
        <div class="services-header">
            <h2 class="services-header-text">
                Наши услуги
            </h2>
        </div>
        <div class="services-content">
            <div class="max-wrap services-wrap">
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Онлайн покупка недвижимости
                    </h3>
                    <div class="services-item services-item--1">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Консультация и подбор
                        недвижимости
                    </h3>
                    <div class="services-item services-item--2">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Организация тура
                        для клиентов
                    </h3>
                    <div class="services-item services-item--3">
                    </div>
                </div>
                <div class="services-item-wrap">
                    <h3 class="services-item-title">
                        Безопасный перевод
                        денег
                    </h3>
                    <div class="services-item services-item--4">
                    </div>
                </div>

            </div>
        </div>
        <div class="services-triangles">
            <div class="services-triangles-left"></div>
            <div class="services-triangles-right"></div>
        </div>
    </section>


    <main id="flats" class="main smt">
        <form action="#">
            <div class="search">
                <div class="search-params">
                    <select class="search-param">
                        <option>Выберите район
                        </option>
                        <option>234</option>
                    </select>
                    <select class="search-param">
                        <option>Количество комнат</option>
                        <option>234</option>
                    </select>
                    <select class="search-param">
                        <option>Отображаемая валюта</option>
                        <option>234</option>
                    </select>
                    <select class="search-param">
                        <option>Сортировать по</option>
                        <option>234</option>
                    </select>
                </div>
                <div class="search-button-div">
                    <button class="search-button" type="submit"><img src="/img/search-button.png" alt="Search"></button>
                </div>
            </div>
        </form>

        <div class="results">
            <div class="max-wrap">
                <div class="result-items">
                    <div class="result-item">
                        <img src="/img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="/img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="/img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="/img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="/img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>
                    <div class="result-item">
                        <img src="/img/result1.jpg" alt="Result 1">
                        <div class="result-item__title-wrap">
                            <h4 class="result-item__title">KONAK GARDEN LIFE</h4>
                        </div>

                        <p class="result-item__price">380 000 €</p>

                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-geo-alt result-item__icon" viewBox="0 0 16 16">
                                <path
                                    d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z">
                                </path>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                            </svg>Махмутлар
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house result-item__icon" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>Квартира (1+1)
                        </p>
                        <p class="result-item__desc">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="currentColor"
                                class="bi bi-arrows-fullscreen result-item__icon result-item__icon--square"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z">
                                </path>
                            </svg>Площадь: 53 кв.м.
                        </p>
                    </div>

                </div>
                <a class="results-more" href="#">Показать еще...</a>
            </div>
        </div>

    </main>


    <section class="post-services">
        <div class="max-wrap">
            <h2 class="post-services-title">
                Постпродажный сервис
            </h2>
            <div class="post-services-wrap">
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-1.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Услуги юриста
                        </h4>
                        <p class="post-services-item__text">
                            Наши юристы полностью сопровождают Вас на всех этапах сделки. Помогают со сбором и оформлением
                            необходимых документов. С
                            нами процедура оформления будет полностью прозрачной и не потребует много времени.
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-2.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Услуги дизайнера
                        </h4>
                        <p class="post-services-item__text">
                            Наши дизайнеры готовы создать для Вас квартиру мечты. Креативные идеи с тонким ощущением вкуса и
                            цвета, а также
                            возможность создавать новое и не бояться экспериментировать. Поможем сделать ваш интерьер лучше.
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-3.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Клининг
                        </h4>
                        <p class="post-services-item__text">
                            Когда Ваша квартира вот вот будет готова, сразу закрадываются мысли о генеральной уборке. Наши
                            специалисты готовы
                            сделать это за Вас. Профессиональный клининг с использованием современного оборудования для
                            Вашего
                            комфорта и экономии
                            времени.
                        </p>
                    </fieldset>
                </div>
                <div class="post-services-item">
                    <fieldset class="post-services-item__fieldset">
                        <legend class="post-services-item__legend"><img src="/img/postservices-4.svg" alt=""></legend>
                        <h4 class="post-services-item__title">
                            Оборудование бытовой техникой, закуп мебели и текстиля
                        </h4>
                        <p class="post-services-item__text">
                            После покупки недвижимости, встаёт закономерный вопрос о покупке мебели и бытовой техники. И
                            здесь
                            мы
                            готовы Вам помочь.
                            Мы сотрудничаем с лучшими производителями мебели и бытовой техники, которую Вы сможете
                            приобрести
                            по
                            очень выгодным
                            ценам.
                        </p>
                    </fieldset>
                </div>
            </div>
        </div>
    </section>

    <section class="media">
        <div class="max-wrap">
            <div class="media-wrap">
                <h2 class="media-title">
                    СМИ о нас
                </h2>
                <p class="media-desc">
                    Lorem Ipsum является текст-заполнитель обычно используется в графических, печать и издательской
                    индустрии
                    для
                    предварительного просмотра макета и визуальных макетах
                </p>
                <div class="media-items">
                    <div class="media-item-container">
                        <div class="media-item">
                            <img src="/img/media-quote.png" alt="quote" class="media-quote">
                            <div class="media-content">
                                <p class="media-text">
                                    Lorem Ipsum является текст-заполнитель обычно используется в графических, печать</p>
                                <p class="media-unit">
                                    - Портал "ИМЯ"
                                </p>
                                <a href="#" class="media-link">Перейти</a>
                            </div>

                            <div class="media-image">
                                <img src="/img/media-1.jpg" alt="Media 1">
                            </div>
                        </div>
                    </div>
                    <div class="media-item-container">
                        <div class="media-item">
                            <img src="/img/media-quote.png" alt="quote" class="media-quote">
                            <div class="media-content">
                                <p class="media-text">
                                    Lorem Ipsum является текст-заполнитель обычно используется в графических, печать</p>
                                <p class="media-unit">
                                    - Портал "ИМЯ"
                                </p>
                                <a href="#" class="media-link">Перейти</a>
                            </div>

                            <div class="media-image">
                                <img src="/img/media-2.jpg" alt="Media 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">
        <h2 class="questions-title">
            Вопрос - ответ
        </h2>

        <div class="max-wrap">
            <div class="questions-items">
                <div class="questions-item">

                    <input class="questions-checkbox" type="checkbox" id="title1" />
                    <label class="questions-label" for="title1">Accordion One<div class="questions-plus">+</div>

                    </label>
                    <div class="questions-content">
                        <p> Your content goes here inside this division with the class "content".Your content goes here
                            inside
                            this division with the class "content".Your content goes here inside this division with the
                            class
                            "content".Your content goes here inside this division with the class "content".</p>
                    </div>
                </div>
                <div class="questions-item">
                    <input class="questions-checkbox" type="checkbox" id="title2" />
                    <label class="questions-label" for="title2">Accordion One<div class="questions-plus">+</div></label>

                    <div class="questions-content">
                        <p>Your content goes here inside this division with the class "content".</p>
                    </div>
                </div>

                <div class="questions-item">
                    <input class="questions-checkbox" type="checkbox" id="title3" />
                    <label class="questions-label" for="title3">Accordion One<div class="questions-plus">+</div></label>

                    <div class="questions-content">
                        <p>Your content goes here inside this division with the class "content".</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection

@section('scripts')
    <script src="/js/simple-lightbox.jquery.min.js"></script>
    <script>
        (function() {
            var $gallery = new SimpleLightbox('.gallery a', {});
        })();
    </script>
@endsection

@section('footer-style')
    footer-waves
@endsection