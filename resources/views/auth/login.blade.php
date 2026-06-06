<x-auth-layout>
    <form action="/login" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
        </div>
        <button type="submit">Register</button>
    </form>
</x-auth-layout>
