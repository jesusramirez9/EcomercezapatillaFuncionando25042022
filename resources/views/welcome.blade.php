<x-app-layout>


    @push('link')
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    @endpush
    <div>
        <div class="relative h-contacto bg-center bg-cover w-full object-cover object-center pulse2 animated"
            style="background-image: url('{{ asset('imgz/home/slider.png') }}')">

        </div>
        <div class="bg-black">
            <div class="container flex justify-center py-2 ">
                <p class=" text-white font-medium uppercase">¡Un mundo de maravillas por <span
                        class="text-yellow-600 font-medium">DESCUBRIR!</span></p>
            </div>
        </div>
    </div>

    <div class="my-6 md:my-14">
        <p class="text-center text-xl md:text-3xl tracking-wide">Es hora de ponerte en marcha</p>
    </div>
    <div class="bg-gray-100 py-10">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-10 xl:gap-16 ">
                @foreach ($products as $product)
                    <div class="shadow-xl  mx-8 md:mx-0 bg-white">
                        <figure class="relative">
                            <div class="absolute z-30 mt-4 ml-4">
                                @if ($product->offer == 0)
                                @else
                                    <div class="bg-red-600 text-white px-1 py-1 w-16 rounded-lg z-50">
                                        <p class="text-center text-sm font-semibold">
                                            -
                                            {{ intval((($product->offer - $product->price) / $product->offer) * 100) }}
                                            %
                                        </p>
                                    </div>
                                @endif
                            </div>
                            @if ($product->images->count())
                                <img class="h-80 w-full object-cover object-center scrollflow -slide-bottom -opacity"
                                    src="{{ Storage::url($product->images->first()->url) }}" alt="">
                            @else
                                <img class="h-80 w-full object-cover object-center"
                                    src="https://images.pexels.com/photos/5082560/pexels-photo-5082560.jpeg?cs=srgb&dl=pexels-cottonbro-5082560.jpg&fm=jpg"
                                    alt="">
                            @endif

                        </figure>
                        <a href="{{ route('products.show', $product) }}" class="">
                            <div class="py-2 px-2 bg-white">
                                <p class="text-gray-400 font-medium text-xs text-center uppercase">
                                    {{ $product->subcategory->name }}</p>
                                <h1 class="text-lg  text-center font-semibold scrollflow -slide-bottom -opacity">
                                    {{ Str::limit($product->name, 40, '...') }}
                                </h1>
                                <p class="mb-5 text-gray-600 font-medium text-center"> Oferta: S/.
                                    <span
                                        class="font-bold text-xl text-center text-black scrollflow -slide-bottom -opacity">
                                        {{ $product->price }} </span> x Persona
                                </p>
                                @if ($product->offer != 0)
                                    <p class="text-center text-gray-400 line-through">Precio regular: s/
                                        {{ $product->offer }}
                                    </p>
                                @else
                                @endif
                                <div class="flex justify-center py-4">
                                    <button
                                        class="inline-block py-2 px-7 border border-[#d18916] rounded-full text-base text-body-color font-medium hover:border-primary hover:bg-primary hover:text-orange-600 transition"><i
                                            class="fa fa-shopping-cart mr-2"></i>Ver tour</button>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="my-10 md:my-14">
        <div class="grid grid-cols-2 justify-center items-center bg-purple-800">
            <div class="bg-purple-800 text-white">
                <h1 class="mx-28 text-3xl">We produce and sell the best sports shoes in the US. But we do not restrict
                    our models to be just pragmatic.</h1>
                <p class="mx-28 text-2xl mt-4">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste eveniet molestias incidunt blanditiis!
                    Error dolores, tenetur harum, vitae ullam officia obcaecati sit eveniet repellendus accusamus, autem
                    corrupti at nostrum blanditiis!
                </p>
                <div class="mx-28 mt-8">
                    <button
                        class=" border-2 border-white px-6 py-2 text-xl hover:bg-white hover:border-purple-800 cursor-pointer hover:text-purple-800 hover:ease-out hover:transform hover:font-bold">
                        Conocenos
                    </button>
                </div>
            </div>
            <div class="w-full h-contacto bg-cover bg-bottom object-cover object-center"
                style="background-image: url('{{ asset('imgz/home/image3.png') }}'); background-repeat: no-repeat;">
            </div>
        </div>
    </div>

    <div class="mx-20">
        <div class="grid grid-cols-1 md:grid-cols-3 md:gap-8 ">
            <div>
                <div class="object-cover bg-cover bg-center object-center w-full h-contacto"
                    style="background-image: url('{{ asset('imgz/home/p1.png') }}'); background-repeat: no-repeat;">
                </div>
                <p class="text-2xl font-semibold text-gray-600 mt-4">Lorem ipsum dolor sit amet consectetur </p>
            </div>
            <div>
                <div class="object-cover bg-cover bg-center object-center w-full h-contacto"
                    style="background-image: url('{{ asset('imgz/home/p2.png') }}'); background-repeat: no-repeat;">
                </div>
                <p class="text-2xl font-semibold text-gray-600 mt-4">Lorem ipsum dolor sit amet consectetur </p>

            </div>
            <div>
                <div class="object-cover bg-cover bg-center object-center w-full  h-contacto"
                    style="background-image: url('{{ asset('imgz/home/p3.png') }}'); background-repeat: no-repeat;">
                </div>
                <p class="text-2xl font-semibold text-gray-600 mt-4">Lorem ipsum dolor sit amet consectetur </p>

            </div>

        </div>
    </div>
<div class="mt-20">
    <div class="w-full h-contacto bg-cover bg-center object-cover object-center"
    style="background-image: url('{{ asset('imgz/home/image5.png') }}'); background-repeat: no-repeat;">

    </div>
</div>


{{-- <div>
    @livewire('show-flayer')
</div> --}}






    @push('script')
    @endpush

</x-app-layout>
