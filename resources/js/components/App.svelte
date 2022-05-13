<script>
	import { onMount } from "svelte";
	import Router, { link } from "svelte-spa-router"
	import Component from './MyTestComponent.svelte'
	import Home from './Home.svelte'
	import NotFound from './NotFound.svelte'

	const routes = {
		'/': Home,
		'/comp': Component,
		'*': NotFound,
	}

	onMount(() => {
	  console.log("the component has mounted");
	});
</script>

<main>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Example Component
						<a href="/" use:link>Home</a>
						<a href="/comp" use:link>Componente</a>
						<a href="/ajuda" use:link>Ajuda</a>
					</div>
					<div class="card-body">
						<Router {routes} />
					</div>
				</div>
			</div>
		</div>
	</div>
</main>