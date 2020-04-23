
                        <div class="col-lg-7 col-xl-7" style="padding:0">
                            <div class="col-12 slide_home_section__container_info__bigtitle">
                                <div class="slide_home_section__container_info__bigtitle__line">
                                    @include('front.components.home-cards-block',[
                                        'home'=>$item['home'],
                                        ])
                                        @include('front.components.homes-text-block',[
                                            'field__1'=>$item['field__1'],
                                            'field__2'=>$item['field__2'],
                                            'field__3'=>$item['field__3'],
                                            'field__4'=>$item['field__4'],
                                    ])
                                </div>
                                <div class="text_contaiener">
                                        @include('front.components.home.amenities',[
                                            'description'=>$item['description'],
                                    ])
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="slide_home_section__container_info__features">
                                    <h2 class="title-home">Features</h2>
                                </div>
                                @foreach($data as $key=>$collection)
                                    @foreach($collection['items'] as $item)
                                        @include('front.components.home.features-components',[
                                            'check_in'=>$item['check_in'],
                                            'area'=>$item['area'],
                                            'type'=>$item['type'],
                                            'elevator'=>$item['elevator'],
                                            'checkout'=>$item['checkout'],
                                            'floor'=>$item['floor'],
                                            'field__2'=>$item['field__2'],
                                            'field__3'=>$item['field__3'],
                                            ])
                                    @endforeach
                                @endforeach
                            </div>
                            <div class="col-12">
                                <div class="slide_home_section__container_info__features">
                                    <h2 class="title-home">Amenities</h2>
                                </div>
                                @foreach($data as $key=>$collection)
                                    @foreach($collection['items'] as $item)
                                        @include('front.components.home.amenities',[
                                            'wifi_hispeed'=>$item['wifi_hispeed'],
                                            'shower'=>$item['shower'],
                                            'air_condicioned'=>$item['air_condicioned'],
                                            'hair_dryer'=>$item['hair_dryer'],
                                            'kitchen'=>$item['kitchen'],
                                            'towel'=>$item['towel'],
                                            'utensils'=>$item['utensils'],
                                            'tv'=>$item['tv'],
                                            'laundry'=>$item['laundry'],
                                            'park'=>$item['park'],
                                            ])
                                    @endforeach
                                @endforeach
                            </div>
    
                        </div>