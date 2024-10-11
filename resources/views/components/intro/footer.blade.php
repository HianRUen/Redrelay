<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<section  class="relative overflow-hidden">
    <div class="hidden dark:block before:content-[''] before:absolute before:right-[56%] before:-bottom-[240px] before:z-10 before:w-[265px] sm:before:w-[565px] before:h-[90px] sm:before:h-[147px] before:blur-[115px] sm:before:blur-[175px] before:rounded-full before:pointer-events-none before:bg-[#997AF1]"></div>

    <div class="hidden dark:block before:content-[''] before:absolute before:left-[56%] before:bottom-0 before:z-10 before:w-[265px] sm:before:w-[565px] before:h-[90px] sm:before:h-[147px] before:blur-[115px] sm:before:blur-[175px] before:rounded-full before:pointer-events-none before:bg-[#CB7AF1]"></div>

    <div class="px-6">
        <div
            data-aos="fade-up" 
            data-aos-duration="1500" 
            data-aos-anchor-placement="center-bottom"
            class="relative z-10 max-w-[1000px] w-full mx-auto mb-[140px] intro-footer-bg-dark px-6 py-10 text-center rounded-lg"
        >
            <div class=" max-w-[700px] mx-auto">
                <h6 class="font-bold text-white">
                    {{$banner->title}}
                </h6>
            </div>

            <div class="max-w-[400px] mx-auto flex items-center justify-center gap-4 mt-8">
                <a 
                    href="{{$banner->child_sections[0]->section_links[0]->link_url}}" 
                    class="px-7 py-3 rounded-lg border text-sm font-bold   hover:bg-primary-600 text-white"
                >
                    {{$banner->child_sections[0]->section_links[0]->link_text}}
                </a>
                <a 
                    href="{{$banner->child_sections[0]->section_links[1]->link_url}}" 
                    class="px-7 py-3 rounded-lg border text-sm font-bold border-white hover:bg-primary-600 text-white"
                >
                    {{$banner->child_sections[0]->section_links[1]->link_text}}
                </a>
            </div>
        </div>
    </div>

    <div id="footer" class="px-6 pt-20 bg-gray-25 dark:bg-transparent">
        <div class="px-6 max-w-[1200px] w-full mx-auto text-gray-600 dark:text-white">
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-16 pb-10 border-b border-gray-300 dark:border-gray-700">
                <div>
                    <div class="flex items-center mb-6">
                       <img src="/assets/logo/redrelay.svg" />
                    </div>
    
                    <p class="!leading-7">
                        {{$app->description}}
                    </p>
                    <style>
                        .social-media-section {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.social-media-list {
    display: flex;
    list-style: none;
    padding: 0;
}

.social-media-list li {
    margin: 0 5px;
}

.social-media-list li a {
    display: inline-block;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    background-color: #f0f0f0;
    color: #333;
    font-size: 15px;
    transition: all 0.3s ease;
}

.social-media-list li a:hover {
    background-color:#dd761c; /* Change this to match your brand */
    color: white;
}

.facebook-icon:hover { background-color: #3b5998; }
.twitter-icon:hover { background-color: #1da1f2; }
.instagram-icon:hover { background-color: #e4405f; }
.linkedin-icon:hover { background-color: #0077b5; }

                    </style>
                    <div class="social-media-section">
                        <ul class="social-media-list">
                            <li><a href="https://web.facebook.com/Redrelayai" target="_blank" class="facebook-icon">
                                <i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://x.com/Redrelayai" target="_blank" class="twitter-icon">
                                <i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/@RedRelayAI" target="_blank" class="instagram-icon">
                                <i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/red-relay-ai-pvt-ltd/" target="_blank" class="linkedin-icon">
                                <i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>

                </div>
    
                <div class="grid grid-cols-12 gap-16 md:gap-4">
                    <div class="col-span-12 md:col-span-2"></div>
    
                    <div class="col-span-12 md:col-span-5">
                        <p class="font-bold text-gray-900 dark:text-white mb-6">
                           Useful links
                        </p>
        
                        <ul class="flex flex-col gap-3">
                            <li>
                                <a href="#header">{{__('Home')}}</a>
                            </li>
                            <li>
                                <a href="#demos">{{__('Demos')}}</a>
                            </li>
                            <li>
                                <a href="#templates">{{__('Templates')}}</a>
                            </li>
                            <li>
                                <a href="#faqs">{{__('Faqs')}}</a>
                            </li>
                            <li>
                                <a href="#price-plan">{{__('Pricing')}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-span-12 md:col-span-5">
                        <p class="font-bold text-gray-900 dark:text-white mb-6">
                            {{__('Company')}}
                        </p>
        
                        <ul class="flex flex-col gap-3">
                            @if (count($custom_pages) > 0)
                                @foreach ($custom_pages as $page)
                                    <li>
                                        <a href="/app/{{ $page->route }}">
                                            {{ $page->name }}
                                        </a>
                                    </li>
                                @endforeach
                            @else
                                <li>{{__('Here will show custom created pages from dashboard')}}</li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        
            <div class="flex flex-col-reverse md:flex-row gap-6 items-center justify-between py-10">
                <p class="text14 font-medium text-center">
                    {{$app->copyright}}
                </p>
    
                <div class="pl-6 flex items-center flex-wrap gap-4">
                    @foreach ($socials as $social)
                        <a href={{$social->link}} target="_blank">
                            <img src="/{{$social->logo}}" class="w-5 h-5" alt="" />
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>