const timer = () => {
    const dayValue = parseInt(document.querySelector(".day").innerText);
    const hourValue = parseInt(document.querySelector(".hour").innerText);
    const minuteValue = parseInt(document.querySelector(".minute").innerText);
    const secondValue = parseInt(document.querySelector(".second").innerText);

    const countDate = new Date();
    countDate.setDate(countDate.getDate() + dayValue);
    countDate.setHours(countDate.getHours() + hourValue);
    countDate.setMinutes(countDate.getMinutes() + minuteValue);
    countDate.setSeconds(countDate.getSeconds() + secondValue);

    const updateTimer = () => {
        const now = new Date().getTime();
        const remainingTime = countDate - now;

        const second = 1000;
        const minute = second * 60;
        const hour = minute * 60;
        const day = hour * 24;

        const textDay = Math.floor(remainingTime / day);
        const textHour = Math.floor((remainingTime % day) / hour);
        const textMinute = Math.floor((remainingTime % hour) / minute);
        const textSecond = Math.floor((remainingTime % minute) / second);

        document.querySelector(".day").innerText = textDay > 0 ? textDay : 0;
        document.querySelector(".hour").innerText = textHour > 0 ? textHour : 0;
        document.querySelector(".minute").innerText = textMinute > 0 ? textMinute : 0;
        document.querySelector(".second").innerText = textSecond > 0 ? textSecond : 0;

        if (remainingTime > 0) {
            requestAnimationFrame(updateTimer);
        }
    };

    setTimeout(updateTimer, 0);
}

timer();

//notification message//

const bell = document.querySelector('.notification-bell');
const list = document.querySelector('.notification-list');
const count = document.querySelector('.notification-count');
const closeNotificationButtons = document.querySelectorAll('.close-notification');

// إظهار/إخفاء قائمة الإشعارات عند النقر على جرس الإشعارات
bell.addEventListener('click', function () {
    list.style.display = list.style.display === 'block' ? 'none' : 'block';
});

// إغلاق الإشعار عند النقر على زر الإغلاق (X)
closeNotificationButtons.forEach(function (button) {
    button.addEventListener('click', function (event) {
        event.stopPropagation();
        const li = button.parentElement;
        li.parentElement.removeChild(li);
        updateNotificationCount();
    });
});

// تحديث عدد الإشعارات
function updateNotificationCount() {
    const messages = document.querySelectorAll('.notification-list li');
    const num = messages.length;
    count.innerText = num;

    // عرض عدد الإشعارات على زر الجرس
    const bellCount = document.querySelector('.notification-bell .notification-count');
    bellCount.innerText = num;
}

// عرض عدد الإشعارات عند تحميل الصفحة
updateNotificationCount();


//commnt//
const closeBtns = document.querySelectorAll('.close-btn');

closeBtns.forEach(closeBtn => {
    closeBtn.addEventListener('click', () => {
        const alertBox = closeBtn.parentNode;
        alertBox.parentNode.removeChild(alertBox);
    });
});

//المشكله اللي ظهرت ان عدد الاشعارات اختفي //
