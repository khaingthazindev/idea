<x-layout>
	<x-form.form title="Login" description="Glad to have you back.">
		<form action="/login" method="POST" class="mt-10 space-y-4">
			@csrf

			<x-form.field label="Email" name="email" type="email" />
			<x-form.field label="Password" name="password" type="password" />
		
			<button type="submit" class="btn w-full mt-2">Login</button>	
		</form>
	</x-form.form>
</x-layout>