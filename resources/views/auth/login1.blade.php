<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>


    <div class="login-container">
        <form action="" class="form-login">
            <ul class="login-nav">
                <li class="login-nav__item active">
                    <a href="#">Se connecter</a>
                </li>
                <li class="login-nav__item">
                    <a href="#">S'inscrire</a>
                </li>
            </ul>
            <label for="login-input-user" class="login__label">
                Nom d'utilisateur ou email
            </label>
            <input id="login-input-user" class="login__input" type="text" />
            <label for="login-input-password" class="login__label">
                Mot de passe
            </label>
            <input id="login-input-password" class="login__input" type="password" />
            <label for="login-sign-up" class="login__label--checkbox">
                <input id="login-sign-up" type="checkbox" class="login__input--checkbox" />
                Rester connecté
            </label>
            <button class="login__submit" disabled>Se connecter</button>
        </form>
        <a href="#" class="login__forgot">Mot de passe oublié?</a>
    </div>


    <style>
        body {
	background-color: #e9e9e9;
	font-family: 'Montserrat', sans-serif;
	font-size: 16px;
	line-height: 1.25;
	letter-spacing: 1px;
}

* {
	box-sizing: border-box;
	transition: .25s all ease;
}

.login-container {
	display: block;
	position: relative;
	z-index: 0;
	margin: 4rem auto 0;
  padding: 5rem 4rem 0 4rem;
	width: 100%;
	max-width: 525px;
	min-height: 680px;
	background-image: url(https://c8.alamy.com/compfr/r52gb1/fete-de-la-musique-de-fond-du-concept-television-illustration-de-fete-de-la-musique-de-fond-vecteur-concept-web-design-r52gb1.jpg);
	box-shadow: 0 50px 70px -20px rgba(0, 0, 0, 0.85);
}

.login-container:after {
	content: '';
	display: inline-block;
	position: absolute;
	z-index: 0;
	top: 0;
	right: 0;
	bottom: 0;
	left: 0;
	background-image: radial-gradient(ellipse at left bottom, rgba(22, 24, 47, 1) 0%,rgba(38, 20, 72, .9) 59%, rgba(17, 27, 75, .9) 100%);
	box-shadow: 0 -20px 150px -20px rgba(0, 0, 0, 0.5);
}

.form-login {
	position: relative;
	z-index: 1;
  padding-bottom: 4.5rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.25);
}

.login-nav {
	position: relative;
	padding: 0;
	margin: 0 0 6em 1rem;
}

.login-nav__item {
	list-style: none;
	display: inline-block;
}

.login-nav__item + .login-nav__item {
	margin-left: 2.25rem;
}

.login-nav__item a {
	position: relative;
	color: rgba(255, 255, 255, 0.5);
	text-decoration: none;
	text-transform: uppercase;
	font-weight: 500;
	font-size: 1.25rem;
	padding-bottom: .5rem;
	transition: .20s all ease;
}

.login-nav__item.active a,
.login-nav__item a:hover{
	color: #ffffff;
	transition: .15s all ease;
}

.login-nav__item a:after {
	content: '';
  display: inline-block;
  height: 10px;
  background-color: rgb(255, 255, 255);
  position: absolute;
  right: 100%;
  bottom: -1px;
  left: 0;
  border-radius: 50%;
  transition: .15s all ease;
}

.login-nav__item a:hover:after,
.login-nav__item.active a:after{
	background-color: #005555;
	height: 2px;
	right: 0;
	bottom: 2px;
	border-radius: 0;
	transition: .20s all ease;
}
.login__label {
	display: block;
	padding-left: 1rem;
}

.login__label,
.login__label--checkbox {
	color: rgba(255, 255, 255, 0.5);
	text-transform: uppercase;
	font-size: .75rem;
	margin-bottom: 1rem;
}

.login__label--checkbox {
	display: inline-block;
	position: relative;
	padding-left: 1.5rem;
	margin-top: 2rem;
	margin-left: 1rem;
	color: #ffffff;
	font-size: .75rem;
	text-transform: inherit;
}

.login__input {
	color: white;
	font-size: 1.15rem;
	width: 100%;
	padding: .5rem 1rem;
	border: 2px solid transparent;
	outline: none;
	border-radius: 1.5rem;
	background-color: rgba(255, 255, 255, 0.25);
	letter-spacing: 1px;
}

.login__input:hover,
.login__input:focus{
	color: white;
	border: 2px solid rgba(255, 255, 255, 0.5);
	background-color: transparent;
}

.login__input + .login__label {
	margin-top: 1.5rem;
}

.login__input--checkbox {
	position: absolute;
	top: .1rem;
	left: 0;
	margin: 0;
}

.login__submit {
	color: #ffffff;
	font-size: 1rem;
	font-family: 'Montserrat', sans-serif;
	text-transform: uppercase;
	letter-spacing: 1px;
	margin-top: 1rem;
	padding: .75rem;
	border-radius: 2rem;
	display: block;
	width: 100%;
	background-color: rgba(17, 97, 237, .75);
	border: none;
	cursor: pointer;
}

.login__submit:hover {
	background-color: rgba(17, 97, 237, 1);
}

.login__forgot {
	display: block;
	margin-top: 3rem;
	text-align: center;
	color: rgba(255, 255, 255, 0.75);
	font-size: .75rem;
	text-decoration: none;
	position: relative;
	z-index: 1;
}

.login__forgot:hover {
	color: rgb(17, 97, 237);
}
    </style>






































































































































































































































{{--
    <form id="login-form">

        <svg class="logo">
            <use xlink:href="#logo">
        </svg>

        <h1>Sign In</h1>

        <div class="input email">
            <input type="text" value="email@gmail.com" placeholder=" ">
            <label>Email</label>
        </div>

        <div class="input password">
            <div class="dots"></div>
            <input type="password" placeholder=" ">
            <label>Password</label>
            <div class="cursor"></div>
            <div class="line">
                <svg>
                    <use xlink:href="#line">
                </svg>
            </div>
            <div class="tick">
                <svg>
                    <use xlink:href="#tick">
                </svg>
            </div>
        </div>

        <button type="submit" disabled>
            <svg viewBox="0 0 16 16">
                <circle stroke-opacity=".1" cx="8" cy="8" r="6"></circle>
                <circle class="load" cx="8" cy="8" r="6"></circle>
            </svg>
            <span>Submit</span>
        </button>

    </form>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 44 44" id="logo">
            <path d="M33.0457936,22 L44,22 C44,34.1502645 34.1912695,44 22.0915872,44 C16.0417461,44 10.5646429,41.5375661 6.6,37.5563492 L14.3462931,29.7786761 C16.3285751,31.7689899 19.0669207,33 22.0915872,33 C25.1013453,33 27.827598,31.7810952 29.8075146,29.8080513 L22,22 L33.0457936,22.001001 C33.0457936,22.0006673 33.0457936,22.0003337 33.0457936,22 Z M21.9084128,0 C27.958756,0 33.4362661,2.4628426 37.400987,6.44464202 L29.6552,14.2228233 C27.6728001,12.2316284 24.9338388,11 21.9084128,11 C15.8585716,11 10.9542064,15.9248678 10.9542064,22 L10.954,22 L0,22 C0,9.8497355 9.8087305,0 21.9084128,0 Z"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 900 22" id="line">
            <path d="M0,11 L180,11 C240,11.00344 300,13.6718267 360,19.00516 C450,27.00516 450,-4.99483997 540,3.00516003 C600,8.33849336 660,11.00344 720,11 L900,11"></path>
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 28" id="tick">
            <path d="M3,12.5026479 L7,16.5026479 L13,9.50264792 C29.6216402,-12.0066881 40.3541164,26.00516 19,26.0026479 L-3.37507799e-13,26.0026479"></path>
        </symbol>
    </svg>

    <!-- dribbble - twitter -->
    <a class="dribbble" href="https://dribbble.com/ai" target="_blank"><img src="https://cdn.dribbble.com/assets/dribbble-ball-mark-2bd45f09c2fb58dbbfb44766d5d1d07c5a12972d602ef8b32204d28fa3dda554.svg" alt=""></a>
    <a class="twitter" target="_blank" href="https://twitter.com/aaroniker_me"><svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72"><path d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"></path></svg></a>
</body>



<style>
    #login-form {
    --primary: #005555;
    --primary-dark: #002b2b;
    --dark: #002e2e;
    --grey-dark: #3c4848;
    --grey: #82a8a8;
    --grey-light: #a8d1d1;
    --light: #c5e2e2;
    --pale: #e8f6f6;
	 --white: #fff;
	 --red: #f04949;
	 width: 100%;
	 max-width: 180px;
}
 #login-form .logo {
	 width: 44px;
	 height: 44px;
	 display: block;
	 margin: 0 auto;
	 fill: var(--primary);
}
 #login-form h1 {
	 margin: 24px 0;
	 font-family: inherit;
	 font-size: 20px;
	 font-weight: bold;
	 text-align: center;
	 color: var(--dark);
}
 #login-form .input {
	 position: relative;
}
 #login-form .input label {
	 pointer-events: none;
	 font-size: 12px;
	 font-weight: 500;
	 line-height: 1.5;
	 position: absolute;
	 top: 8px;
	 left: 0;
	 transform-origin: 0 50%;
	 transform: translateY(var(--label-y, 0)) scale(var(--label-scale, 1)) translateZ(0);
	 transition: transform 0.3s, color 0.3s;
	 color: var(--label-color, var(--grey-light));
}
 #login-form .input input {
	 width: 100%;
	 border-radius: 0;
	 -webkit-appearance: none;
}
 #login-form .input input:not(:placeholder-shown) + label, #login-form .input input:focus + label {
	 --label-y: -17px;
	 --label-scale: 0.8;
	 --label-color: var(--grey);
}
 #login-form .input.email {
	 margin-bottom: 16px;
}
 #login-form .input.email input {
	 background: none;
	 outline: none;
	 border: none;
	 color: var(--grey-dark);
	 font-weight: 500;
	 font-family: inherit;
	 font-size: 13px;
	 letter-spacing: 0.025em;
	 line-height: 22px;
	 caret-color: var(--primary);
	 padding: 7px 0 5px 0;
	 box-shadow: inset 0 -1px 0 0 var(--grey);
}
 #login-form .input.password {
	 height: 34px;
}
 #login-form .input.password .dots {
	 position: absolute;
	 display: flex;
	 left: 0;
	 top: 50%;
	 transform: translateY(-2px);
}
 #login-form .input.password .dots i {
	 width: 6px;
	 height: 6px;
	 border-radius: 50%;
	 background: var(--grey-dark);
	 display: block;
	 margin-right: 4px;
	 animation: var(--name, scale-in) 0.05s linear forwards;
}
 #login-form .input.password .dots i.remove {
	 --name: scale-out;
}
 #login-form .input.password .dots i:nth-child(1) {
	 --delay: 393.5ms;
}
 #login-form .input.password .dots i:nth-child(2) {
	 --delay: 387ms;
}
 #login-form .input.password .dots i:nth-child(3) {
	 --delay: 380.5ms;
}
 #login-form .input.password .dots i:nth-child(4) {
	 --delay: 374ms;
}
 #login-form .input.password .dots i:nth-child(5) {
	 --delay: 367.5ms;
}
 #login-form .input.password .dots i:nth-child(6) {
	 --delay: 361ms;
}
 #login-form .input.password .dots i:nth-child(7) {
	 --delay: 354.5ms;
}
 #login-form .input.password .dots i:nth-child(8) {
	 --delay: 348ms;
}
 #login-form .input.password .dots i:nth-child(9) {
	 --delay: 341.5ms;
}
 #login-form .input.password .dots i:nth-child(10) {
	 --delay: 335ms;
}
 #login-form .input.password .dots i:nth-child(11) {
	 --delay: 328.5ms;
}
 #login-form .input.password .dots i:nth-child(12) {
	 --delay: 322ms;
}
 #login-form .input.password .dots i:nth-child(13) {
	 --delay: 315.5ms;
}
 #login-form .input.password .dots i:nth-child(14) {
	 --delay: 309ms;
}
 #login-form .input.password .dots i:nth-child(15) {
	 --delay: 302.5ms;
}
 #login-form .input.password .cursor {
	 position: absolute;
	 height: 15px;
	 width: 1px;
	 left: 0;
	 top: 10px;
	 background: var(--primary);
	 opacity: 0;
	 transform: translateX(var(--cursor-x, 0));
	 transition: transform var(--cursor-duration, 0.1s);
}
 #login-form .input.password input {
	 opacity: 0;
	 padding: 0;
	 position: absolute;
	 left: 0;
	 top: 0;
	 bottom: 0;
}
 #login-form .input.password input:focus + label + .cursor {
	 animation: cursor 1s ease infinite;
}
 #login-form .input .line, #login-form .input .tick {
	 pointer-events: none;
	 position: absolute;
	 left: var(--left, 0);
	 bottom: var(--bottom, -10px);
	 opacity: var(--opacity, 1);
	 transition: opacity 0s linear var(--tick-opacity-delay, 0.5s);
}
 #login-form .input .line svg, #login-form .input .tick svg {
	 stroke: var(--line-stroke, var(--grey));
	 stroke-width: 1;
	 fill: none;
	 display: block;
	 width: var(--width, 900px);
	 height: var(--height, 22px);
	 transform: translateX(var(--x, var(--line-x, 0)));
	 transition: transform var(--line-x-duration, 0s) ease, stroke 0.3s;
}
 #login-form .input .line {
	 overflow: hidden;
	 width: 100%;
	 transform-origin: 0 50%;
}
 #login-form .input .tick {
	 --left: 100%;
	 --bottom: -1px;
	 --width: 32px;
	 --height: 28px;
	 --x: -16px;
	 --opacity: 0;
}
 #login-form .input .tick svg {
	 stroke: var(--tick-stroke, var(--grey));
	 stroke-dasharray: 17 81;
	 stroke-dashoffset: var(--tick-offset, 34px);
	 transition: stroke-dashoffset 0.5s ease var(--tick-delay, 0s), stroke 0.5s ease var(--tick-delay, 0s);
}
 #login-form button {
	 border: none;
	 outline: none;
	 padding: 10px 0;
	 margin: 24px 0 0 0;
	 border-radius: 7px;
	 color: var(--c, #fff);
	 width: 100%;
	 font-size: 14px;
	 line-height: 16px;
	 position: relative;
	 font-family: inherit;
	 font-weight: 500;
	 background: var(--b, var(--primary-dark));
	 transition: color 0.3s, background 0.3s;
	 -webkit-appearance: none;
	 -webkit-tap-highlight-color: transparent;
	 cursor: pointer;
}
 #login-form button:disabled {
	 --b: var(--pale);
	 --c: var(--grey-light);
	 cursor: not-allowed;
}
 #login-form button svg {
	 width: 16px;
	 height: 16px;
	 display: block;
	 position: absolute;
	 left: 50%;
	 top: 50%;
	 margin: -8px 0 0 -8px;
	 fill: none;
	 stroke: currentColor;
	 stroke-linecap: round;
	 stroke-width: 1.5;
	 opacity: var(--svg-o, 0);
	 transform: translateY(var(--svg-y, -16px)) rotate(-90deg) scale(var(--svg-s, 0.7)) translateZ(0);
	 transition: transform 0.3s, opacity 0.3s;
}
 #login-form button svg circle:first-child {
	 stroke-opacity: 0.1;
}
 #login-form button svg circle:last-child {
	 stroke-dasharray: 38px;
	 stroke-dashoffset: 114px;
}
 #login-form button span {
	 display: inline-block;
	 vertical-align: top;
	 line-height: 16px;
	 opacity: var(--span-o, 1);
	 transform: translateY(var(--span-y, 0)) scale(var(--span-s, 1)) translateZ(0);
	 transition: transform 0.3s, opacity 0.3s;
}
 #login-form.processing:not(.error):not(.success) button {
	 --svg-y: 0;
	 --svg-s: 1;
	 --svg-o: 1;
	 --span-y: 16px;
	 --span-s: 0.7;
	 --span-o: 0;
}
 #login-form.processing:not(.error):not(.success) button svg circle:last-child {
	 animation: load 1.2s linear 0.3s;
}
 #login-form.processing.error {
	 --line-x: -80%;
	 --line-x-duration: 2s;
	 --line-stroke: var(--red);
	 --cursor-duration: 1s;
}
 #login-form.processing.error .dots i {
	 animation: flip 0.4s linear var(--delay) forwards;
}
 #login-form.processing.success .input .tick {
	 --opacity: 1;
	 --tick-offset: 98px;
	 --tick-delay: 0.45s;
	 --tick-opacity-delay: 0s;
	 --tick-stroke: var(--primary);
	 animation: tick 0.4s linear forwards;
}
 #login-form.processing.success .input .line {
	 animation: line 0.5s linear forwards;
}
 @keyframes tick {
	 70%, 80% {
		 transform: translateX(-10px);
	}
}
 @keyframes line {
	 70% {
		 transform: scaleX(0.8);
	}
}
 @keyframes flip {
	 25% {
		 transform: translateY(8px);
	}
	 35% {
		 transform: translateY(12px);
	}
	 65% {
		 transform: translateY(-4px);
	}
	 100% {
		 transform: translateY(-12px) scale(0);
	}
}
 @keyframes load {
	 from {
		 stroke-dashoffset: 114px;
	}
	 to {
		 stroke-dashoffset: 38px;
	}
}
 @keyframes scale-in {
	 from {
		 transform: scale(0);
	}
	 to {
		 transform: scale(1);
	}
}
 @keyframes scale-out {
	 from {
		 transform: scale(1);
	}
	 to {
		 transform: scale(0);
	}
}
 @keyframes cursor {
	 50% {
		 opacity: 1;
	}
}
 html {
	 box-sizing: border-box;
	 -webkit-font-smoothing: antialiased;
}
 * {
	 box-sizing: inherit;
}
 *:before, *:after {
	 box-sizing: inherit;
}
 body {
	 min-height: 100vh;
	 display: flex;
	 font-family: 'Inter', 'Inter UI', Arial;
	 justify-content: center;
	 align-items: center;
	 background: #f6f8ff;
}
 body .dribbble {
	 position: fixed;
	 display: block;
	 right: 20px;
	 bottom: 20px;
}
 body .dribbble img {
	 display: block;
	 height: 28px;
}
 body .twitter {
	 position: fixed;
	 display: block;
	 right: 64px;
	 bottom: 14px;
}
 body .twitter svg {
	 width: 32px;
	 height: 32px;
	 fill: #1da1f2;
}

</style>


<script>
    // correct password is `password` lol

const $ = (s, o = document) => o.querySelector(s);
const $$ = (s, o = document) => o.querySelectorAll(s);

const login = $('#login-form');
const passwordContainer = $('.password', login);
const password = $('input', passwordContainer);
const passwordList = $('.dots', passwordContainer);
const submit = $('button', login);

password.addEventListener('input', e => {
    if(password.value.length > $$('i', passwordList).length) {
        passwordList.appendChild(document.createElement('i'));
    }
    submit.disabled = !password.value.length;
    passwordContainer.style.setProperty('--cursor-x', password.value.length * 10 + 'px');
});

let pressed = false;

password.addEventListener('keydown', e => {

    if(pressed || login.classList.contains('processing') || (password.value.length > 14 && e.keyCode != 8 && e.keyCode != 13)) {
        e.preventDefault();
    }
    pressed = true;

    setTimeout(() => pressed = false, 50);

    if(e.keyCode == 8) {
        let last = $('i:last-child', passwordList);
        if(last !== undefined && last) {
            last.classList.add('remove');
            setTimeout(() => last.remove(), 50);
        }
    }

});

password.addEventListener('select', function() {
    this.selectionStart = this.selectionEnd;
});

login.addEventListener('submit', e => {

    e.preventDefault();

    if(!login.classList.contains('processing')) {
        login.classList.add('processing');
        setTimeout(() => {

            let cls = password.value == 'password' ? 'success' : 'error';
            console.log(password.value);

            login.classList.add(cls);
            setTimeout(() => {
                login.classList.remove('processing', cls);
                if(cls == 'error') {
                    password.value = '';
                    passwordList.innerHTML = '';
                    submit.disabled = true;
                }
            }, 2000);
            setTimeout(() => {
                if(cls == 'error') {
                    passwordContainer.style.setProperty('--cursor-x', 0 + 'px');
                }
            }, 600);

        }, 1500);
    }

});

</script>


</html> --}}
