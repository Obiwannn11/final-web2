<x-layout>
    <x-slot:title>Login</x-slot:title>

    <div class="container mx-auto p-4 pt-6 md:p-6 lg:p-12">
        <div class="max-w-md mx-auto">
            <h2 class="text-3xl font-bold mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus
                        class="w-full px-4 py-2 text-sm border border-gray-300 rounded">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 text-sm border border-gray-300 rounded">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between mb-4">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" class="text-sm">Remember me</label>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-500 hover:text-blue-700">Forgot
                        password?</a>
                </div>

                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
            </form>
        </div>
    </div>

</x-layout>
