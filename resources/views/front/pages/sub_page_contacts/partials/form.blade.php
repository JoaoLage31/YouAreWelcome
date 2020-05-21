<div class="contacts_form col-xl-11">
    <div class="contacts_form_left col-xl-3">
        <h2>Our Contact</h2>
            @include('front.components.sub_pages.contacts.contacts-comp',[
                'field_title'=>'Phone',
                'field'=>'347 222 333 ',
            ])
            @include('front.components.sub_pages.contacts.contacts-comp',[
                'field_title'=>'Phone',
                'field'=>'info@youarewelcome.pt ',
            ])
            @include('front.components.sub_pages.contacts.contacts-comp',[
                'field_title'=>'Phone',
                'field'=>'Av. Dom Afonso Henriques 1196 - Esc. 203, 4450-012 Matosinhos ',
            ])
        <h2>Our Contact</h2>
        @include('front.components.sub_pages.contacts.contacts-comp',[
            'field'=>'We’ve written FAQs covering all 
                    helpful topics, from securing your 
                    room to checking out at the end of 
                    your stay.',
            'link'=>'click here'
        ])
    </div>
    <div class="col-1"></div>
    <div class="contacts_form_right col-xl-6">
        <h2>Send us a message</h2>
        @include('front.pages.sub_home_types.partials_global.form')
    </div>
</div>