
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Svelte and other libraries. It is a great starting point when
 * building robust, powerful web applications using Svelte and Laravel.
 */

require('./bootstrap');

import App from "./components/App.svelte";
// import MyTestComponent from './components/MyTestComponent.svelte';
// import Home from './components/Home.svelte';
// import NotFound from './components/NotFound.svelte';

customElements.define('my-app', App);
// customElements.define('my-test-component', MyTestComponent);
// customElements.define('home', Home);
// customElements.define('not-found', NotFound);

// const app = new App({
//   target: document.body
// });

// window.app = app;

// export default app;