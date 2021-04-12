<?php $countries = \App\Http\Controllers\PageController::countries();?>

@extends('layouts.base')

@section('title', 'Home')

@section('content')
<section class="about py-md-5 " id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-4">
                <div class="section_header_icon">
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.webp')}}" alt="">
                </div>
                <div class="section_header py-md-3">
                    <h3>About Us</h3>
                </div>
                <p> We are specializing on out-p
                    ut of Ceramic fire-proof Crucibles Offering product which manufacture is carried out on its own Exclusive technology. Our product provides high-quality and safe molding; exactly this fact is valued and acknowledged by Our Partners. AG Group Has been specialized on out-put of High Quality Ceramic fire-proof products since 2000 Our Product started to be in great Demand in Dubai and Russia in a very short time .In 2001 the specialists of Our Company developed a new technology which was named "SPECIAL CERAMIC”. Since 2003 it has started serial output under this name. Our Company uses only clean oxides in out- put off its product , making it possible to get high quality products , High quality and low prices mark out our Product in the market. Since 2014 we have started to open new markets for Our product in Europe , the majority of firms engaged in jewelry business actively using Our Product , Well-Known companies such as shop of specialized jewelry equipments "Onix " , Jewelry factory"Navur-J " Dental Centre " Eurodent", a shop of specialized jewelry equipments "Sapphire " , PAT, Granit , Arex-Pol , Misara , Advantage , Rodent , Santimas etc. Are among our partners.</p>
            </div>
        </div>
    </div>
</section>

<!--------------------------
    Product
-------------------------->
<section class="product py-5" id="product">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center py-4">
                <div class="section_header_icon">
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.webp')}}" alt="">
                </div>
                <div class="section_header py-3">
                    <h3 >Product</h3>
                    <p>Specialized Fireproof-ceramic Products</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="content  col-12">
                <div class="grid grid-big m-auto col-12 px-0">
                    <div class="product1 mt-5">
                        <div class="single_product product_toggle1 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thin walled </h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/1.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_1">
                            <div class="simple-gallery py-3 col-12">
                                <div class="description col-12 text-right align-content-center">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/1.webp')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/1_2.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/1_3.webp')}}">
                                            </div>
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_5.webp')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="description col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Ceramic crucibles thin walled
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 100-109</p>
                                        <p class="text-left pb-4">Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Fire-proof Ceramic crucibles are for hand fusing of
                                                precious metals and their fusions,
                                                Perfectly resist to the fire changes of thermo,
                                                Do not contain admixtures which could pollute the fusions,
                                                They are neutral to metals and aggressive midst
                                                The maximal working temperature is up to 2000 °C
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-12 d-flex justify-content-center">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">100</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº0 (capacity 25 gr)</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">15</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">101</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº1 (capacity 45 gr)</td>
                                            <td class="text-center">45</td>
                                            <td class="text-center">17</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">102</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº2 (capacity 65 gr)</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">18</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">103</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº3 (capacity 90 gr)</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">22</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">104</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº4 (capacity 135 gr)</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">23</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">105</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº5 (capacity 175 gr)</td>
                                            <td class="text-center">65</td>
                                            <td class="text-center">27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">106</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº6 (capacity 210 gr)</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">107</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº7 (capacity 260 gr)</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">30</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">108</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº8 (capacity 320 gr)</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">32</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">109</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº9 (capacity 420 gr)</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center">32</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product2 mt-5">
                        <div class="single_product product_toggle2 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thick walled</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/2.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_2">
                            <div class="simple-gallery py-3 text-center m-auto">
                                <div class="description col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/2.webp')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/2.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/2_1.webp')}}">
                                            </div>
                                             <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_5.webp')}}">
                                            </div>


                                        </div>
                                    </div>
                                    <div class="description col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">
                                        </div>
                                        <h2 class="text-left" >
                                            Ceramic crucibles thick walled
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 110-113</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Graphite containing crucibles are for fusing of
                                                precious metals and their fusions with fusion
                                                temperature up to 2000 °C
                                                perfectly resist to the fire changes of thermo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-12 d-flex justify-content-center">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">110</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº1a (capacity 80 gr)</td>
                                            <td class="text-center">54</td>
                                            <td class="text-center">20</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">111</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº2a (capacity 185 gr)</td>
                                            <td class="text-center">67</td>
                                            <td class="text-center">27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">112</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº3a (capacity 380 gr)</td>
                                            <td class="text-center">81</td>
                                            <td class="text-center">32</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">113</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº4a (capacity 700 gr)</td>
                                            <td class="text-center">107</td>
                                            <td class="text-center">37</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product3 mt-5">
                        <div class="single_product product_toggle3 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3">Glass from ceramic</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/3.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_3">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/3.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/3.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/3_1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/3_2.webp')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">
                                        </div>
                                        <h2 class="text-left" >
                                            Glass from ceramic
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 115-122</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Fire-proof glasses from ceramics for
                                                fusing of color metals and their fusions
                                                with fusion temperature up to 2000 ˚C.
                                                Do not contain admixtures which could
                                                pollute the fusions. They are
                                                neutral to metals and aggressive midst.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-12 d-flex justify-content-center">
                                    <table class="col-md-10 col-12" >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">115</td>
                                            <td class="text-left pl-3">Glass from ceramics with a cover (350gr) </td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">60</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">116</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº1 (250gr) </td>
                                            <td class="text-center">48</td>
                                            <td class="text-center">57</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">117</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº2 (500gr) </td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">68</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">118</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº3 (750gr) </td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">80</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">119</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº4 (1kg) </td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">96</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">120</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº5 (2kg) </td>
                                            <td class="text-center">95</td>
                                            <td class="text-center">110</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">121</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº6 (3kg) </td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">125</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">122</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº7 (4kg) </td>
                                            <td class="text-center">140</td>
                                            <td class="text-center">140</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-big m-auto col-12 px-0">
                    <div class="product4 mt-5">
                        <div class="single_product product_toggle4 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3">Ceramic board for soldering  from 80mm-200*100mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">

                                <img  class="img-fluid" src="{{asset('assets/images/products/4.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_4">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/4.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4_1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4_2.webp')}}">
                                            </div>
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4_3.webp')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">
                                        </div>
                                        <h2 class="text-left" >
                                            Ceramic board for soldering from 80mm-200*100mm
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 136-140</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        </div>
                                </div>
                                {{--table--}}
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <table class=" col-md-10 col-12"  >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter (mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">136</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">80</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">137</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">110</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">138</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">140</td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">138В</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">150</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">139</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">170</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">140</td>
                                            <td class="text-left pl-3">Ceramic board for soldering (200x100)</td>
                                            <td class="text-center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product5 mt-5">
                        <div class="single_product product_toggle5 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3">Universal Holder for all size of crucibles 320mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/5.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_5">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/5.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/5.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/5_1.webp')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Universal Holder for all size of crucibles 320mm
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 141</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        </div>
                                </div>

                                {{--table--}}
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <table class="col-md-10 col-12" >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">141</td>
                                            <td class="text-left pl-3">Holder for crucibles with regulate silder (320mm)</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product6 mt-5">
                        <div class="single_product product_toggle6 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3"> Testing stone</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/6.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_6">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/6.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_2.webp')}}">
                                            </div>

                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_3.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_4.webp')}}">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Testing stone
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>

                                        <p class="text-left pt-2"><span> Product code: 142-146</span> </p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                TESTING STONE-black bar from close-grain
                                                siliceous shale by which become clear assay
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {{--table--}}
                                <div class="col-lg-12 m-auto d-flex justify-content-center  ">
                                    <table class="col-md-10 col-12 py-3"  >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">142</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">60</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">143</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">80</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">144</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">100</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">145</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">120</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">146</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">120</td>
                                            <td class="text-center">140</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-small  col-12 px-0">
                    <div class="product1">
                        <div class="single_product product_toggle1 d-flex flex-column align-items-center ">
                            <div class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thin walled </h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/1.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_1 ">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto ">
                                <div class="description  col-12 text-right align-content-center">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/1.webp')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image"  src="{{asset('assets/images/products/1_2.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/1_3.webp')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">
                                        </div>
                                        <h2 class="text-left" >
                                            Ceramic crucibles thin walled
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 100-109</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Fire-proof Ceramic crucibles are for hand fusing of
                                                precious metals and their fusions,
                                                Perfectly resist to the fire changes of thermo,
                                                Do not contain admixtures which could pollute the fusions,
                                                They are neutral to metals and aggressive midst
                                                The maximal working temperature is up to 2000 °C
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-12 d-flex justify-content-center">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">100</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº0 (capacity 25 gr)</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">15</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">101</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº1 (capacity 45 gr)</td>
                                            <td class="text-center">45</td>
                                            <td class="text-center">17</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">102</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº2 (capacity 65 gr)</td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">18</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">103</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº3 (capacity 90 gr)</td>
                                            <td class="text-center">55</td>
                                            <td class="text-center">22</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">104</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº4 (capacity 135 gr)</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">23</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">105</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº5 (capacity 175 gr)</td>
                                            <td class="text-center">65</td>
                                            <td class="text-center">27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">106</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº6 (capacity 210 gr)</td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">107</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº7 (capacity 260 gr)</td>
                                            <td class="text-center">75</td>
                                            <td class="text-center">30</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">108</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº8 (capacity 320 gr)</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">32</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">109</td>
                                            <td class="text-left pl-3">Ceramic crucibles thin walled Nº9 (capacity 420 gr)</td>
                                            <td class="text-center">85</td>
                                            <td class="text-center">32</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product2">
                        <div class="single_product product_toggle2 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thick walled</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/2.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_2 ">
                            <div class="simple-gallery-sm py-3  text-center m-auto  ">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/2.webp')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/2.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/2_1.webp')}}">
                                            </div>
                                             <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_5.webp')}}">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Ceramic crucibles thick walled
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 110-113</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Graphite containing crucibles are for fusing of
                                                precious metals and their fusions with fusion
                                                temperature up to 2000 °C
                                                perfectly resist to the fire changes of thermo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="  pt-lg-5 col-lg-12 m-auto d-flex justify-content-center  ">

                                    <table  class="col-md-10 col-12">
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">110</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº1a (capacity 80 gr)</td>
                                            <td class="text-center">54</td>
                                            <td class="text-center">20</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">111</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº2a (capacity 185 gr)</td>
                                            <td class="text-center">67</td>
                                            <td class="text-center">27</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">112</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº3a (capacity 380 gr)</td>
                                            <td class="text-center">81</td>
                                            <td class="text-center">32</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">113</td>
                                            <td class="text-left pl-3">Crucibles from ceramic thick-walled Nº4a (capacity 700 gr)</td>
                                            <td class="text-center">107</td>
                                            <td class="text-center">37</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product3">
                        <div class="single_product product_toggle3 d-flex flex-column align-items-center">
                            <div class="product_name text-center">
                                <h3 class="py-3">Glass from ceramic</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/3.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_3 ">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/3.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/3.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/3_1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/3_2.webp')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Glass from ceramic
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 115-122</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Fire-proof glasses from ceramics for
                                                fusing of color metals and their fusions
                                                with fusion temperature up to 2000 ˚C.
                                                Do not contain admixtures which could
                                                pollute the fusions. They are
                                                neutral to metals and aggressive midst.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-lg-12 m-auto d-flex justify-content-center  ">
                                    <table class="col-md-10 col-12" >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">115</td>
                                            <td class="text-left pl-3">Glass from ceramics with a cover (350gr) </td>
                                            <td class="text-center">50</td>
                                            <td class="text-center">60</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">116</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº1 (250gr) </td>
                                            <td class="text-center">48</td>
                                            <td class="text-center">57</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">117</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº2 (500gr) </td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">68</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">118</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº3 (750gr) </td>
                                            <td class="text-center">70</td>
                                            <td class="text-center">80</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">119</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº4 (1kg) </td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">96</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">120</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº5 (2kg) </td>
                                            <td class="text-center">95</td>
                                            <td class="text-center">110</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">121</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº6 (3kg) </td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">125</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">122</td>
                                            <td class="text-left pl-3">Glass from ceramics Nº7 (4kg) </td>
                                            <td class="text-center">140</td>
                                            <td class="text-center">140</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product4">
                        <div class="single_product product_toggle4 d-flex flex-column align-items-center ">
                            <div class="product_name text-center">
                                <h3 class="py-3">Ceramic board for soldering from 80mm-200*100mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/4.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_4 ">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/4.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4_1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4_2.webp')}}">
                                            </div>
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/4_3.webp')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Ceramic board for soldering from 80mm-200*100mm
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 136-140</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        </div>
                                </div>
                                {{--table--}}
                                <div class="col-lg-12 m-auto d-flex justify-content-center  ">
                                    <table class=" col-md-10 col-12"  >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter (mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">136</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">80</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">137</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">110</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">138</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">140</td>
                                        </tr>

                                        <tr>
                                            <td class="text-center">138В</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">150</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">139</td>
                                            <td class="text-left pl-3">Ceramic board for soldering</td>
                                            <td class="text-center">170</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">140</td>
                                            <td class="text-left pl-3">Ceramic board for soldering (200x100)</td>
                                            <td class="text-center"></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product5">
                        <div class="single_product product_toggle5 d-flex flex-column align-items-center ">
                            <div class="product_name text-center">
                                <h3 class="py-3">Universal Holder for all size of crucibles 320mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/5.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_5" >
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/5.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/5.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/5_1.webp')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Universal Holder for all size of crucibles 320mm
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>
                                        <p class="text-left pt-2"><span> Product code:</span> 141</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        </div>
                                </div>
                                {{--table--}}
                                <div class="col-lg-12 m-auto d-flex justify-content-center  ">
                                    <table class="col-md-10 col-12" >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">141</td>
                                            <td class="text-left pl-3">Holder for crucibles with regulate silder (320mm)</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product6">
                        <div class="single_product product_toggle6 d-flex flex-column align-items-center ">
                            <div class="product_name text-center">
                                <h3 class="py-3">Testing stone</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/6.webp')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_6" >
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto ">
                                <div class="description-sm  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" alt="images" src="{{asset('assets/images/products/6.webp')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_1.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_2.webp')}}">
                                            </div>

                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_3.webp')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" alt="products image" src="{{asset('assets/images/products/6_4.webp')}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="description  col-lg-6 col-md-6 col-12 ">
                                        <div class="copy d-md-block d-none">

                                        </div>
                                        <h2 class="text-left" >
                                            Testing stone
                                        </h2>
                                        <hr>
                                        <div class="text-left py-3">
                                            <button class="btn ask_product">ASK FOR THE PRODUCT</button>
                                        </div>

                                        <p class="text-left pt-2"><span> Product code: 142-146</span> </p>
                                        <p class="text-left pb-4" >Manufactured and carried out on its own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                TESTING STONE-black bar from close-grain
                                                siliceous shale by which become clear assay
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {{--table--}}
                                <div class="col-lg-12 m-auto d-flex justify-content-center  ">
                                    <table class="col-md-10 col-12 py-3"   >
                                        <thead>
                                        <tr>
                                            <th>Code</th>
                                            <th class="text-left pl-3">The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td class="text-center">142</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">40</td>
                                            <td class="text-center">60</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">143</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">60</td>
                                            <td class="text-center">80</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">144</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">80</td>
                                            <td class="text-center">100</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">145</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">100</td>
                                            <td class="text-center">120</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">146</td>
                                            <td class="text-left pl-3">Testing stone</td>
                                            <td class="text-center">120</td>
                                            <td class="text-center">140</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------
    Product End
-------------------------->
<!--------------------------
    Partner
-------------------------->
<section class="partner py-5" id="partner">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section_header_icon">
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.webp')}}" alt="">
                </div>
                <div class="section_header py-3">
                    <h3 >Become a Partner</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">

                <form class="partners">
                    <div class="flash-message-partner  alert alert-success" role="alert">
                        @if (Session::has("success"))
                            {{ Session::get("success") }}
                        @endif
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email_partner" placeholder="Email Address" name="email" required>
                                <span class="text-danger error-text email_err"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control number" id="tel_partner" placeholder="Tel" name="tel" required>
                                <span class="text-danger error-text telephone_err"></span>

                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control " id="cname_partner" placeholder="Company Name" name="cname" required>
                                <span class="text-danger error-text company_name_err"></span>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control " id="site_partner" placeholder="Site Url" name="site">
                                <span class="text-danger error-text site_err"></span>

                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select name="country" id="country_partner" class="form-control ">
                                    <option value="" class="disabled-selected" disabled selected>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country}}">{{$country}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text country_err"></span>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="message" id="message_partner" placeholder="Massage" class="form-control " rows="3"></textarea>
                                <span class="text-danger error-text message_err"></span>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button type="button" id="send_partner" class="btn  btn-block text-uppercase">Send</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--------------------------
    Partner End
-------------------------->
<!--------------------------
    Download
-------------------------->
<section class="download py-5" id="download">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-4">
                <div class="section_header_icon">
                    <img src="{{asset('assets/images/firwatch-fire-icon-white.webp')}}" alt="">
                </div>
                <div class="section_header py-3">
                    <h3 >Download Catalog</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-column align-items-center ">
                <div class="col-lg-3 col-md-6 col-10 text-center ">
                    <img src="{{asset('assets/images/catalog_downland.webp')}}" class="img-fluid" alt="img">

                </div>
                <br>
                <div class="mt-3">
                    <a href="{{asset('assets/file/Catalogue.pdf')}}" class="btn btn-dark downland_button py-3 px-4 mt-3" download><span><i class="fa fa-download"></i>  Download</span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------
    Download End
-------------------------->
<!--------------------------
    Contact Us
-------------------------->
<section class="contact_us py-5" id="contact_us">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section_header_icon">
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.webp')}}" alt="">
                </div>
                <div class="section_header py-3">
                    <h3 >Contact Us</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <form class="contact">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="flash-message-contact  alert alert-success" role="alert">
                                @if (Session::has("success"))
                                    {{ Session::get("success") }}
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control " id="first_name" placeholder="First Name" name="First name" required>
                                <span class="text-danger error-text first_name_err"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control " id="last_name" placeholder="Last Name" name="last_name" required>
                                <span class="text-danger error-text last_name_err"></span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control " id="contact_email" placeholder="Email Address" name="contact_email" required>
                                <span class="text-danger error-text contact_email_err"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="country_contact" id="country_contact" class="form-control ">
                                    <option value="" class="disabled-selected" disabled selected>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country}}">{{$country}}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger error-text country_contact_err"></span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="contact_message" id="contact_message" class="form-control " placeholder="Massage" rows="3"></textarea>
                                <span class="text-danger error-text contact_message_err"></span>

                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button type="button" id="send_contact" class="btn  btn-block text-uppercase">Send</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--------------------------
    Contact Us End
-------------------------->
@endsection
