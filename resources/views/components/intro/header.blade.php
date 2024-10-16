<style>
    .header-bg {
        background-image: url('{{asset('assets/logo/bgrelay1.png')}}');
        background-size: contain;
        background-position: top;
        background-repeat: no-repeat;
        width: 100%; /* Full viewport width */
        position: relative;
    }
</style>



<!-- Header Section -->
<div class="header-bg">
<section id="header" class="max-w-[1000px] w-full mx-auto px-6 py-[116px] relative">
    <div class="hidden dark:block after:content-[''] after:absolute after:left-[30%] after:top-[6%] after:w-[205px] sm:after:w-[385px] after:h-[66px] sm:after:h-[116px] after:blur-[80px] sm:after:blur-[130px] after:rounded-full after:pointer-events-none after:bg-[#7cf17a]"></div>

    <div class="hidden dark:block after:content-[''] after:absolute after:right-[8%] after:top-[10%] after:w-[120px] sm:after:w-[200px] after:h-[200px] sm:after:h-[316px] after:blur-[100px] sm:after:blur-[150px] after:rounded-full after:pointer-events-none after:bg-[#7cf17a]"></div>
    
    <div class="text-center relative z-10">
        <div
            data-aos="fade-up" 
            data-aos-duration="1500"
            data-aos-anchor-placement="center-bottom" 
            class="pb-5"
        >
            <div class="mb-[30px]">
                <p class="text18 font-medium text-primary-500 mb-4 uppercase">
                    {{$header->title}}
                </p>
        
                <h1 class="max-w-[944px] mx-auto font-bold text-2xl md:text-4xl lg:text-5xl lg:!leading-[62px]">
                    {{$header->subtitle}}
                </h1>
        
                <p 
                    style="line-height: 28px !important"
                    class="max-w-[710px] text-base md:text18 text-gray-700 dark:text-white mx-auto pt-[30px]" 
                >
                    {{$header->description}}
                </p>
            </div>

            <div 
                class="max-w-[340px] mx-auto flex items-center justify-center gap-5"
            >
                <a 
                    href="{{$header->child_sections[0]->section_links[0]->link_url}}" 
                    class="px-7 py-3 font-bold rounded-lg border text-sm border-primary-500 bg-primary-500  hover:bg-primary-600 text-white"
                >
                    {{$header->child_sections[0]->section_links[0]->link_text}}
                </a>
                <a 
                    href="{{$header->child_sections[0]->section_links[1]->link_url}}" 
                    class="px-7 py-3 font-bold rounded-lg border text-sm border-primary-500 hover:bg-primary-25 text-primary-500"
                >
                    {{$header->child_sections[0]->section_links[1]->link_text}}
                </a>
            </div>
        </div>
        
        <div 
            data-aos="fade-up" 
            data-aos-duration="1500"
            data-aos-anchor-placement="center-bottom"
        >
            <div class="rounded-lg md:rounded-2xl overflow-hidden mt-12 mb-7">
                <div id="videoThumbnail" class="relative">
                    <img src="{{asset($header->child_sections[0]->image)}}" alt="">
        
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <!--<button -->
                        <!--    id="videoPlay"-->
                        <!--    type="button"-->
                        <!--    class="relative flex items-center justify-center hover:scale-110 active:scale-100 h-16 w-16  duration-700"-->
                        <!-->-->
                        <!--    <div class="bg-primary-500 absolute inset-0 w-full animate-ping rounded-full video-play" ></div> -->
                        <!--    <div class="absolute inset-0 w-full rounded-full shadow-xl bg-gray-50"></div> -->
                        <!--    <div class="relative">-->
                                <!--@include('components.icons.play', ['class' => 'w-6 h-6 text-gray-900'])-->
                        <!--    </div>-->
                        <!--</button>-->
                    </div>
                </div>
                <!--<div id="videoPlayer" class="hidden video-container overflow-hidden relative [&>button]:hover:flex">-->
                <!--    <video controls width="100%" id="video2">-->
                <!--        <source-->
                <!--            type="video/mp4"-->
                <!--            src="{{$header->asset}}"-->
                <!--        />-->
                <!--    </video>-->
    
                <!--    <button-->
                <!--        data-target-video="video2"-->
                <!--        class="video-control w-[70px] h-[70px] p-5 flex items-center justify-center rounded-full bg-white hover:bg-gray-100 absolute top-0 bottom-0 right-0 left-0 m-auto"-->
                <!--    >-->
                <!--        @include('components.icons.play', ['class' => 'play-icon block w-6 h-6 text-gray-900'])-->
                <!--        @include('components.icons.pause', ['class' => 'pause-icon hidden w-6 h-6 text-gray-900'])-->
                <!--    </button>-->
                <!--</div>-->
            </div>
            <p class="text18 font-medium text-gray-700 dark:text-white">
                {{$header->child_sections[0]->title}}
            </p>
        </div>
    </div>
</section>
</div>