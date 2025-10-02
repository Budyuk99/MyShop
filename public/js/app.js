// Мобильное меню
const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
const nav = document.querySelector('nav ul');

mobileMenuBtn.addEventListener('click', () => {
    nav.style.display = nav.style.display === 'flex' ? 'none' : 'flex';
});

// Добавление в корзину
const addToCartButtons = document.querySelectorAll('.add-to-cart');
const cartCount = document.querySelector('.cart-count');

addToCartButtons.forEach(button => {
    button.addEventListener('click', function() {
        let currentCount = parseInt(cartCount.textContent);
        cartCount.textContent = currentCount + 1;
        
        // Анимация
        cartCount.style.transform = 'scale(1.5)';
        setTimeout(() => {
            cartCount.style.transform = 'scale(1)';
        }, 300);
        
        // Временное сообщение
        const originalText = this.textContent;
        this.textContent = 'Добавлено!';
        this.style.backgroundColor = '#4CAF50';
        
        setTimeout(() => {
            this.textContent = originalText;
            this.style.backgroundColor = '';
        }, 2000);
    });
});

// Обновление года в футере
document.querySelector('.copyright p').innerHTML = `&copy; ${new Date().getFullYear()} MONOCHROME. Все права защищены.`;

// Адаптивность навигации
window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
        nav.style.display = 'flex';
    } else {
        nav.style.display = 'none';
    }
});