<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MONOCHROME | Интернет-магазин</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <!-- Шапка -->
    <header>
        <div class="header-top">
            <div class="container">
                <div>Бесплатная доставка при заказе от 5000₽</div>
                <div>
                    <a href="#">Войти</a> | <a href="#">Регистрация</a>
                </div>
            </div>
        </div>
        
        <div class="header-main">
            <div class="container">
                <a href="#" class="logo">MONO<span>CHROME</span></a>
                
                <nav>
                    <ul>
                        <li><a href="#">Главная</a></li>
                        <li><a href="#">Каталог</a></li>
                        <li><a href="#">Новинки</a></li>
                        <li><a href="#">Распродажа</a></li>
                        <li><a href="#">О нас</a></li>
                    </ul>
                </nav>
                
                <div class="header-actions">
                    <div class="search-box">
                        <input type="text" placeholder="Поиск...">
                        <button class="icon-btn"><i class="fas fa-search"></i></button>
                    </div>
                    <button class="icon-btn"><i class="far fa-user"></i></button>
                    <button class="icon-btn"><i class="far fa-heart"></i></button>
                    <button class="icon-btn">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="cart-count">3</span>
                    </button>
                    <button class="mobile-menu-btn">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Герой секция -->
    <section class="hero">
        <div class="container">
            <h1>МИНИМАЛИЗМ В КАЖДОЙ ДЕТАЛИ</h1>
            <p>Откройте для себя нашу коллекцию в чёрно-белой гамме. Элегантность, которая никогда не выходит из моды.</p>
            <div>
                <a href="#" class="btn">Смотреть коллекцию</a>
                <a href="#" class="btn btn-outline">Новинки</a>
            </div>
        </div>
    </section>

    <!-- Категории -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Категории</h2>
            <div class="categories-grid">
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1499952127939-9bbf5af6c51c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Одежда">
                    <div class="category-name">Одежда</div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Аксессуары">
                    <div class="category-name">Аксессуары</div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Обувь">
                    <div class="category-name">Обувь</div>
                </div>
                <div class="category-card">
                    <img src="https://images.unsplash.com/photo-1560769629-975ec94e6a86?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Для дома">
                    <div class="category-name">Для дома</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Популярные товары -->
    <section class="section">
        <div class="container">
            <h2 class="section-title">Популярные товары</h2>
            <div class="products-grid">
                <!-- Товар 1 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Чёрное платье">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Миди-платье чёрное</h3>
                        <div class="product-price">4 990₽</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="add-to-cart">В корзину</button>
                    </div>
                </div>
                
                <!-- Товар 2 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1584917865442-de89df76afd3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Белая рубашка">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Рубашка белая</h3>
                        <div class="product-price">3 490₽</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <button class="add-to-cart">В корзину</button>
                    </div>
                </div>
                
                <!-- Товар 3 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1549298916-b41d501d3772?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Кроссовки">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Кроссовки чёрные</h3>
                        <div class="product-price">7 990₽</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <button class="add-to-cart">В корзину</button>
                    </div>
                </div>
                
                <!-- Товар 4 -->
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1594223274512-ad4803739b7c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Сумка">
                    </div>
                    <div class="product-info">
                        <h3 class="product-title">Сумка кожаная</h3>
                        <div class="product-price">8 990₽</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <button class="add-to-cart">В корзину</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="section features">
        <div class="container">
            <h2 class="section-title">Почему выбирают нас</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3 class="feature-title">Бесплатная доставка</h3>
                    <p>Бесплатная доставка при заказе от 5000₽ по всей России</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-undo-alt"></i>
                    </div>
                    <h3 class="feature-title">Легкий возврат</h3>
                    <p>Возврат товара в течение 14 дней без лишних вопросов</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Гарантия качества</h3>
                    <p>Мы тщательно проверяем каждый товар перед отправкой</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Поддержка 24/7</h3>
                    <p>Наша служба поддержки всегда готова помочь вам</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Подписка -->
    <section class="newsletter">
        <div class="container">
            <h2>Подпишитесь на рассылку</h2>
            <p>Будьте в курсе новых поступлений, акций и эксклюзивных предложений</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Ваш email" required>
                <button type="submit">Подписаться</button>
            </form>
        </div>
    </section>

    <!-- Подвал -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-column">
                    <h3>MONOCHROME</h3>
                    <p>Элегантность в чёрно-белых тонах. Минимализм как философия.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-vk"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Категории</h3>
                    <ul class="footer-links">
                        <li><a href="#">Одежда</a></li>
                        <li><a href="#">Обувь</a></li>
                        <li><a href="#">Аксессуары</a></li>
                        <li><a href="#">Для дома</a></li>
                        <li><a href="#">Новинки</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Помощь</h3>
                    <ul class="footer-links">
                        <li><a href="#">Доставка и оплата</a></li>
                        <li><a href="#">Возврат</a></li>
                        <li><a href="#">Размеры</a></li>
                        <li><a href="#">Уход за вещами</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Контакты</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-phone"></i> 8 (800) 123-45-67</li>
                        <li><i class="fas fa-envelope"></i> info@monochrome.ru</li>
                        <li><i class="fas fa-map-marker-alt"></i> Москва, ул. Примерная, 123</li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 MONOCHROME. Все права защищены.</p>
            </div>
        </div>
    </footer>

    <script src="/js/app.js"></script>
</body>
</html>