// Открытие и закрытие popup
const registerPopup = document.getElementById("registerPopup");
const loginPopup = document.getElementById("loginPopup");

const openRegisterBtn = document.getElementById("openRegisterPopup");
const openLoginBtn = document.getElementById("openLoginPopup");
const openRegisterFromLoginBtn = document.getElementById("openRegisterPopupFromLogin");

const closeButtons = document.querySelectorAll(".close");

// Открыть окно регистрации
if (openRegisterBtn) {
    openRegisterBtn.addEventListener("click", () => {
        registerPopup.style.display = "flex";
    });
}

// Открыть окно авторизации
if (openLoginBtn) {
    openLoginBtn.addEventListener("click", () => {
        loginPopup.style.display = "flex";
    });
}

// Переход с логина на регистрацию
if (openRegisterFromLoginBtn) {
    openRegisterFromLoginBtn.addEventListener("click", () => {
        loginPopup.style.display = "none";
        registerPopup.style.display = "flex";
    });
}

// Закрыть popup
closeButtons.forEach((closeButton) => {
    closeButton.addEventListener("click", () => {
        registerPopup.style.display = "none";
        loginPopup.style.display = "none";
    });
});

// Закрытие при клике вне окна
window.addEventListener("click", (event) => {
    if (event.target === registerPopup) {
        registerPopup.style.display = "none";
    }
    if (event.target === loginPopup) {
        loginPopup.style.display = "none";
    }
});
// Панель администратора
const adminPopup = document.getElementById("adminPopup");
const openAdminPopupBtn = document.getElementById("openAdminPopup");
const adminCloseBtn = adminPopup.querySelector(".close");
const adminLoginForm = document.getElementById("adminLoginForm");
const adminOrders = document.getElementById("adminOrders");
const ordersTableBody = document.getElementById("ordersTableBody");



// Открыть popup панели администратора
openAdminPopupBtn.addEventListener("click", () => {
    adminPopup.style.display = "flex";
});

// Закрыть popup панели администратора
adminCloseBtn.addEventListener("click", () => {
    adminPopup.style.display = "none";
    adminOrders.style.display = "none";
    adminLoginForm.style.display = "block";
});

// Закрыть при клике вне popup
window.addEventListener("click", (event) => {
    if (event.target === adminPopup) {
        adminPopup.style.display = "none";
        adminOrders.style.display = "none";
        adminLoginForm.style.display = "block";
    }
});
document.addEventListener('DOMContentLoaded', () => { 
    const popupq = document.getElementById('popupq');
    const closePopupq = document.getElementById('closePopupq');
    const productNameSpan = document.getElementById('productName');
    const popupProductInputq = document.getElementById('popupProductInputq');
    const buyButtons = document.querySelectorAll('.buy-btnq');

    buyButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productName = button.getAttribute('data-product');
            productNameSpan.textContent = productName;
            popupProductInputq.value = productName;
            popupq.style.display = 'flex'; // Здесь должно быть popupq
        });
    });

    closePopupq.addEventListener('click', () => {
        popupq.style.display = 'none';
    });

    window.addEventListener('click', (event) => {
        if (event.target === popupq) {
            popupq.style.display = 'none';
        }
    });
});