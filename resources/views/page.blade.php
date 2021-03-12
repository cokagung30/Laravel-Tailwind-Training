<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Tailwind</title>
</head>

<body>
    <div class="cga-container cga-mx-auto cga-mt-12">
        <div class="cga-bg-pink-100 cga-rounded-3xl cga-p-10">
            <header class="cga-flex cga-justify-between cga-items-center">
                <div style="height: 50px">
                    <img src="{{ asset('assets/img/logo.png') }}" class="cga-h-full" alt="logo">
                </div>
                <ul class="cga-flex">
                    <li>
                        <a href="#" class="cga-px-4 cga-py-2">Home</a>
                        <a href="#" class="cga-px-4 cga-py-2">About</a>
                        <a href="#" class="cga-px-4 cga-py-2">Service</a>
                        <a href="#" class="cga-px-4 cga-py-2">Portfolio</a>
                        <a href="#" class="cga-px-4 cga-py-2">Context</a>
                    </li>
                </ul>
            </header>

            <section class="cga-flex cga-items-center cga-py-10">
                <div class="cga-w-1/2 cga-pt-4 cga-mr-4">
                    <h1 class="cga-text-6xl cga-font-bold cga-leading-none">
                        Customer Online Rating
                    </h1>
                    <p class="cga-leading-relaxed cga-mt-6 cga-text-gray-600">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut quasi aliquid nihil error pariatur
                        rerum tempora, sequi, inventore nisi voluptate amet voluptatem voluptates consectetur et
                        laboriosam
                        nulla a soluta veritatis.
                    </p>
                    <a href="#"
                        class="cga-border-2 cga-border-pink-300 cga-text-gray-700 cga-rounded-full cga-py-1 cga-px-8 cga-inline-block cga-mt-8">
                        Learn More
                    </a>
                </div>
                <div class="cga-w-1/2">
                    <img src="{{ asset('assets/img/img_default.svg') }}" alt="Nature Fun">
                </div>
            </section>
        </div>
    </div>
</body>

</html>