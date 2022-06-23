@extends('layouts.master')

@section('title') Blogs @stop

@section('content')
    <livewire:navbar />

    <div>
        <div class="max-w-8xl mx-auto px-4 sm:px-6 md:px-8">
            <div class="hidden lg:block fixed z-20 inset-0 top-[7.8125rem] left-[max(0px,calc(50%-45rem))] right-auto w-[19.5rem] pb-10 px-8 overflow-y-auto">
                <nav id="nav" class="lg:text-md lg:leading-6 relative">
                    <ul>
                        <li class="mt-12 lg:mt-8">
                            <h5 class="mb-8 lg:mb-3 font-bold text-slate-900 dark:text-slate-200">Layout</h5>
                            <ul class="space-y-6 lg:space-y-2 border-l border-slate-200 dark:border-slate-400">
                                <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/aspect-ratio">Aspect Ratio</a></li>
                                <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/container">Container</a></li>
                                <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/columns">Columns</a></li>
                                <li><a class="block border-l pl-4 -ml-px border-transparent hover:border-slate-400 dark:hover:border-slate-500 text-slate-700 hover:text-slate-900 dark:text-slate-400 dark:hover:text-slate-300"
                                        href="/docs/break-after">Break After</a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="lg:pl-[19.5rem]">
                <div class="max-w-3xl mx-auto pt-10 xl:max-w-none xl:ml-0 xl:mr-[15.5rem] xl:pr-16">
                    <header id="header" class="relative z-20 border-b border-gray-400 pb-10">
                        <div>
                            <p class="mb-2 text-sm leading-6 font-semibold text-sky-500 dark:text-sky-400">Core Concepts</p>
                            <div class="flex items-center">
                                <h1 class="inline-block text-3xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
                                    Responsive Design
                                </h1>
                            </div>
                        </div>
                        <p class="mt-2 text-lg text-slate-700 dark:text-slate-300">
                            Using responsive utility variants to
                            build adaptive user interfaces.
                        </p>
                    </header>


                    <div id="content-wrapper" class="relative z-20 prose prose-slate mt-8 dark:prose-dark dark:text-gray-300">
                        <h2 class="group flex font-bold text-2xl mb-10 whitespace-pre-wrap" id="overview" style="margin-bottom: 10px">
                            <span class="">Overview</span>
                        </h2>

                        <p>Every utility class in Tailwind can be applied conditionally at different breakpoints, which
                            makes it a piece of cake to build complex responsive interfaces without ever leaving your HTML.
                        </p>
                        <p>There are five breakpoints by default, inspired by common device resolutions:</p>
                        <p>To add a utility but only have it take effect at a certain breakpoint, all you need to do is
                            prefix the utility with the breakpoint name, followed by the <code>:</code> character:</p>

                        <p>This works for <strong>every utility class in the framework</strong>, which means you can change
                            literally anything at a given breakpoint — even things like letter spacing or cursor styles.</p>
                        <p>Here’s a simple example of a marketing page component that uses a stacked layout on small
                            screens, and a side-by-side layout on larger screens <em>(resize your browser to see it in
                                action)</em>:
                        </p>
                </div>
            </div>
        </div>
    </div>

    <livewire:footer />
@stop
