 <!-- ====== Portfolio Section Start -->
 <section id='portfolio' x-data="{
     showCards: 'all',
     activeClasses: 'bg-primary text-white',
     inactiveClasses: 'text-body-color dark:text-dark-6 hover:bg-primary hover:text-white',
 }" class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark">
     <div id='projects' class="container mx-auto">
         <div class="-mx-4 flex flex-wrap">
             <div class="w-full px-4">
                 <div class="mx-auto mb-[60px] max-w-[510px] text-center">

                     <h2 class="text-dark mb-3 text-3xl leading-[1.208] font-bold sm:text-4xl md:text-[40px]">
                         My Recent Projects
                     </h2>
                     <p class="text-body-color text-base dark:text-dark-6">
                         You learn by building projects. Lets build now!
                     </p>
                 </div>
             </div>
         </div>
         <div class="-mx-4 flex flex-wrap justify-center">
             <div class="w-full px-4">
                 <ul class="mb-12 flex flex-wrap justify-center space-x-1">
                     <li class="mb-1">
                         <button @click="showCards = 'all' "
                             :class="showCards == 'all' ? activeClasses : inactiveClasses"
                             class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                             {{ $text }}
                         </button>
                     </li>

                     {{-- @foreach ($categorytabs as $tab)
                         <li class="mb-1">
                             <button @click="showCards = '{{ $tab }}' "
                                 :class="showCards == '{{ $tab }}' ? activeClasses : inactiveClasses"
                                 class="inline-block rounded-lg py-2 px-5 text-center text-base font-semibold transition md:py-3 lg:px-8">
                                 {{ $tab }}
                             </button>
                         </li>
                     @endforeach --}}

                 </ul>
             </div>
         </div>
         <div class="-mx-4 flex flex-wrap">
             {{-- @foreach ($items as $item)
                 <x-portfolio-item :title="$item['title']" :categories="$item['category']" :image="$item['image']" :github="$item['github']">
                 </x-portfolio-item>
             @endforeach --}}

         </div>
     </div>
 </section>
 <!-- ====== Portfolio Section End -->
