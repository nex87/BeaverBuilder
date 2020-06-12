@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- 2. БЛОК SLIDER -->
    <section class="slider _bg-white">
        <div class="slider__block _slide-1">
            <p class="slider__caption">Группа товаров №1</p>
        </div>
        <div class="slider__block _slide-2">
            <p class="slider__caption">Группа товаров №2</p>
        </div>
        <div class="slider__block _slide-3">
            <p class="slider__caption">Группа товаров №3</p>
        </div>
        <div class="slider__block _slide-4">
            <p class="slider__caption">Группа товаров №4</p>
        </div>
        <div class="slider__block _slide-5">
            <p class="slider__caption">Группа товаров №5</p>
        </div>
        <a class="slider__button slider__button-left" href="#" role="button"><</a>
        <a class="slider__button slider__button-right" href="#" role="button">></a>      
    </section>

    <!-- 3. БЛОК CATALOG -->
    <section class="catalog _bg-blue">
        <h2 class="catalog__caption">КАТАЛОГ ТОВАРОВ</h2>
        <div class="catalog__block">
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 1</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 2</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 3</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 4</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 5</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 6</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 7</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 8</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 9</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 10</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 11</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 12</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 13</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 14</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 15</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
            <div class="catalog__item">
                <h2 class="catalog__title">Категория товара 16</h2>
                <img class="catalog__logo" src="storage/images/3-catalog.png" alt="item__logo">
            </div>
        </div>
        <div class="minmax catalog__minmax">
            <a href="#" class="button catalog__button">Min</a>
          </div>   
    </section>

    <!-- 4. БЛОК ADVANT -->
    <section class="advant _bg-white">
        <h2 class="advant__caption">Наши преимущества</h2>
        <div class="advant__block">
            <div class="advant__item">
                <h3 class="advant__title">Ассортимент</h3>
                <img class="advant__img" src="storage/images/4-advantage.png" alt="advant__img">
                <p class="advant__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error quo totam? Ab, dignissimos nulla?</p>
            </div>
            <div class="advant__item">
                <h3 class="advant__title">Цены</h3>
                <img class="advant__img" src="storage/images/4-advantage.png" alt="advant__img">
                <p class="advant__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error quo totam? Ab, dignissimos nulla?</p>
            </div>
            <div class="advant__item">
                <h3 class="advant__title">Доставка</h3>
                <img class="advant__img" src="storage/images/4-advantage.png" alt="advant__img">
                <p class="advant__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error quo totam? Ab, dignissimos nulla?</p>
            </div>
            <div class="advant__item">
                <h3 class="advant__title">График</h3>
                <img class="advant__img" src="storage/images/4-advantage.png" alt="advant__img">
                <p class="advant__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error quo totam? Ab, dignissimos nulla?</p>
            </div>
            <div class="advant__item">
                <h3 class="advant__title">Оплата</h3>
                <img class="advant__img" src="storage/images/4-advantage.png" alt="advant__item">
                <p class="advant__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error quo totam? Ab, dignissimos nulla?</p>
            </div>
            <div class="advant__item">
                <h3 class="advant__title">Любой регион</h3>
                <img class="advant__img" src="storage/images/4-advantage.png" alt="advant__img">
                <p class="advant__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum error quo totam? Ab, dignissimos nulla?</p>
            </div>
        </div>
        <div class="minmax">
            <a class="button advant__minmax">Min</a>
          </div>   
    </section>

    <!-- 5. БЛОК BRANDS -->
    <section class="brands _bg-blue">
        <h2 class="brands__caption">Бренды</h2>
        <div class="brands__block">
            <div class="brands__brand">
                <img class="brand__image" src="storage/images/5-brand.png" alt="brand__logo">
                <h3 class="brand__title">Бренд 1</h3>
            </div>
            <div class="brands__brand">
                <img class="brand__image" src="storage/images/5-brand.png" alt="brand__logo">
                <h3 class="brand__title">Бренд 2</h3>
            </div>
            <div class="brands__brand">
                <img class="brand__image" src="storage/images/5-brand.png" alt="brand__logo">
                <h3 class="brand__title">Бренд 3</h3>
            </div>
            <div class="brands__brand">
                <img class="brand__image" src="storage/images/5-brand.png" alt="brand__logo">
                <h3 class="brand__title">Бренд 4</h3>
            </div>
            <div class="brands__brand">
                <img class="brand__image" src="storage/images/5-brand.png" alt="brand__logo">
                <h3 class="brand__title">Бренд 5</h3>
            </div>
            <div class="brands__brand">
                <img class="brand__image" src="storage/images/5-brand.png" alt="brand__logo">
                <h3 class="brand__title">Бренд 6</h3>
            </div>
        </div>
        <div class="minmax">
            <a class="button brands__minmax">Min</a>
          </div>   
    </section>

    <!-- 6. БЛОК COMMENTS -->
    <section class="comments _bg-white">
        <h2 class="comments__caption">Комментарии</h2>
        <div class="comments__block">
            <article class="comments__comment">
                <img class="comments__image" src="storage/images/7-comment.png" alt="commentator-image">
                <div class="comments__text-block">
                    <p class="comments__text">Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <p class="comments__sign">Lourens S.</p>
                </div>
            </article>
            <article class="comments__comment">
                <img class="comments__image" src="storage/images/7-comment.png" alt="commentator-image">
                <div class="comments__text-block">
                    <p class="comments__text">Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <p class="comments__sign">Lourens S.</p>
                </div>
            </article>
            <article class="comments__comment">
                <img class="comments__image" src="storage/images/7-comment.png" alt="commentator-image">
                <div class="comments__text-block">
                    <p class="comments__text">Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <p class="comments__sign">Lourens S.</p>
                </div>
            </article>
            <article class="comments__comment">
                <img class="comments__image" src="storage/images/7-comment.png" alt="commentator-image">
                <div class="comments__text-block">
                    <p class="comments__text">Porro officia cumque sint deleniti nemo facere rem vitae odit inventore cum odio, iste quia doloribus autem aperiam nulla ea neque reprehenderit. Libero doloribus, possimus officiis sapiente necessitatibus commodi consectetur?</p>
                    <p class="comments__sign">Lourens S.</p>
                </div>
            </article>
        </div>
        <div class="minmax">
            <a class="button comments__minmax">Min</a>
          </div>   
    </section>

    
    <!-- 7. Блок NEWS -->
    <section class="news _bg-blue">
        <h2 class="news__caption">Новости</h2>
        <div class="news__block">
            <article class="news__article">
                <img class="news__image" src="storage/images/news.png" alt="scrinshots-1">
                <div class="news__text-block">
                    <h3 class="news__title">Первая новость.</h3>
                    <p class="news__text">Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>                
                </div>
            </article>
            <article class="news__article">
                <img class="news__image" src="storage/images/news.png" alt="scrinshots-1">
                <div class="news__text-block">
                    <h3 class="news__title">Вторая новость.</h3>
                    <p class="news__text">Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>                
                </div>
            </article>            
            <article class="news__article">
                <img class="news__image" src="storage/images/news.png" alt="scrinshots-1">
                <div class="news__text-block">
                    <h3 class="news__title">Третья новость.</h3>
                    <p class="news__text">Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>                
                </div>
            </article>            
            <article class="news__article">
                <img class="news__image" src="storage/images/news.png" alt="scrinshots-1">
                <div class="news__text-block">
                    <h3 class="news__title">Четвертая новость.</h3>
                    <p class="news__text">Pariatur iure ab sunt nesciunt, quibusdam odio iste cumque itaque, ipsa vel exercitationem ullam quos aut nostrum cupiditate fuga quaerat quam animi dolores. Sequi itaque, unde perferendis nemo debitis dolor.</p>                
                </div>
            </article>
        
        </div>
        <div class="minmax">
            <a class="button news__minmax">Min</a>
          </div>   
    </section>


@endsection


