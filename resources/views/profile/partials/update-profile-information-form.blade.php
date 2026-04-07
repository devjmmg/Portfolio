<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Información de perfil') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Actualiza la información de tu perfil y tu dirección de correo electrónico.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">

            <div>
                <x-input-label for="name" :value="__('Nombre')" />
                <x-text-input id="name" name="name" type="text" :value="old('name', $user->name)" autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div>
                <x-input-label for="fname" :value="__('Primer apellido')" />
                <x-text-input id="fname" name="fname" type="text" :value="old('fname', $user->fname)" />
                <x-input-error class="mt-2" :messages="$errors->get('fname')" />
            </div>

            <div>
                <x-input-label for="lname" :value="__('Segundo apellido')" />
                <x-text-input id="lname" name="lname" type="text" :value="old('lname', $user->lname)" />
                <x-input-error class="mt-2" :messages="$errors->get('lname')" />
            </div>

            <div>
                <x-input-label for="email" :value="__('Correo electrónico')" />
                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" autocomplete="email" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Tu correo electrónico no ha sido verificado.') }}

                            <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Haz clic aquí para reenviar el correo de verificación.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('Se ha enviado un nuevo enlace de verificación a tu correo electrónico.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>

            <div>
                <x-input-label for="experience_years" :value="__('Años de experiencia')" />
                <x-text-input id="experience_years" name="experience_years" type="number" :value="old('experience_years', $user->experience_years)" />
                <x-input-error class="mt-2" :messages="$errors->get('experience_years')" />
            </div>

            <div>
                <x-input-label for="github_url" :value="__('GitHub')" />
                <x-text-input id="github_url" name="github_url" type="text" :value="old('github_url', $user->github_url)" />
                <x-input-error class="mt-2" :messages="$errors->get('github_url')" />
            </div>

            <div>
                <x-input-label for="cv" :value="__('CV')" />
                <x-text-input id="cv" name="cv" type="file" />
                <x-input-error class="mt-2" :messages="$errors->get('cv')" />
            </div>

            <div>
                <x-input-label for="image" :value="__('Imagen')" />
                <x-text-input id="image" name="image" type="file" />
                <x-input-error class="mt-2" :messages="$errors->get('image')" />
            </div>

            <div class="md:col-span-2 mt-6 border-t pt-4">
                <h3 class="text-md font-semibold">Vista previa</h3>
            </div>

            @if ($user->cv)
                <div>
                    <iframe src="{{ asset('storage/cv/' . $user->cv) }}" class="w-full h-[43rem]"></iframe>
                </div>
            @endif

            @if ($user->image)
                <div>
                    <img src="{{ asset('storage/me/' . $user->image) }}" class="w-full block" alt="Imagen actual">
                </div>
            @endif
            
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button>{{ __('Guardar') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-500"
                >{{ __('Guardado') }}</p>
            @endif
        </div>
    </form>
</section>
