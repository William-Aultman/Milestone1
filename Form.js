const form = document.querySelector('form');
form.addEventListener('submit', handleSubmit);

function handleSubmit(event) {
    event.preventDefault();

    const formData = new FormData(event.target);
    const name = formData.get('name');
    const email = formData.get('email');
    const favoriteplane = formData.get('favoriteplane');

    console.log(`Name: ${name}, Email: ${email}, Favoriteplane: ${favoriteplane}`);

    form.reset();
}