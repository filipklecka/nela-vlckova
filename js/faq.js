// FAQ
const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {
    const question = item.querySelector('.faq-question');
    const answer = item.querySelector('.faq-answer');
    const icon = item.querySelector('.faq-icon');

    question.addEventListener('click', () => {
        faqItems.forEach(otherItem => {
            const otherAnswer = otherItem.querySelector('.faq-answer');
            const otherIcon = otherItem.querySelector('.faq-icon');
            if (otherAnswer !== answer) {
                otherAnswer.classList.remove('open');
                if (otherIcon) {
                    otherIcon.classList.remove('rotate');
                }
            }
        });

        answer.classList.toggle('open');
        if (icon) {
            icon.classList.toggle('rotate');
        }
    });
});