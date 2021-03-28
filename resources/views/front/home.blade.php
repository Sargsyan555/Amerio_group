<?php $countries = \App\Http\Controllers\PageController::countries();?>

@extends('layouts.base')

@section('title', 'Home')

@section('content')
<section class="about py-md-5 " id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center py-4">
                <div class="section_header_icon">
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.png')}}" alt="">
                </div>
                <div class="section_header py-md-3">
                    <h3>About Us</h3>
                </div>
                <p> We are specializing on out-put of Ceramic fire-proof Crucibles Offering product which manufacture is carried out on its own Exclusive technology. Our product provides high-quality and safe molding; exactly this fact is valued and acknowledged by Our Partners. AG Group Has been specialized on out-put of High Quality Ceramic fire-proof products since 2000Our Product started to be in great Demand in Dubai and Russia in a very short time .In 2001 the specialists of Our Company developed a new technology which was named "SPECIAL CERAMIC”. Since 2003 it has started serial output under this name. Our Company uses only clean oxides in out- put off its product , making it possible to get high quality products , High quality and low prices mark out our Product in the market. Since 2014 we have started to open new markets for Our product in Europe , the majority of firms engaged in jewelry business actively using Our Product , Well-Known companies such as shop of specialized jewelry equipments "Onix " , Jewelry factory"Navur-J " Dental Centre " Eurodent", a shop of specialized jewelry equipments "Sapphire " , PAT Granit , Arex-Pol , Misara , Advantage , Rodent , Santimas etc. Are among our partners.</p>
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
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.png')}}" alt="">
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
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thin walled </h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/1.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_1 " id="product_1">
                            <div class="simple-gallery p-5 col-12">
                                <div class="description col-12 text-right align-content-center">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/1.jpg')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/1_2.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/1_3.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_5.png')}}">
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
                                        <p class="text-left pb-4">Manufactured and carried out on it's own Exclusive technology.</p>
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
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>100</td>
                                            <td>Ceramic crucibles thin walled Nº0 (capacity 25 gr)</td>
                                            <td>40</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>101</td>
                                            <td>Ceramic crucibles thin walled Nº1 (capacity 45 gr)</td>
                                            <td>45</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>102</td>
                                            <td>Ceramic crucibles thin walled Nº2 (capacity 65 gr)</td>
                                            <td>50</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>103</td>
                                            <td>Ceramic crucibles thin walled Nº3 (capacity 90 gr)</td>
                                            <td>55</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td>104</td>
                                            <td>Ceramic crucibles thin walled Nº4 (capacity 135 gr)</td>
                                            <td>60</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>105</td>
                                            <td>Ceramic crucibles thin walled Nº5 (capacity 175 gr)</td>
                                            <td>65</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>106</td>
                                            <td>Ceramic crucibles thin walled Nº6 (capacity 210 gr)</td>
                                            <td>70</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>107</td>
                                            <td>Ceramic crucibles thin walled Nº7 (capacity 260 gr)</td>
                                            <td>75</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>108</td>
                                            <td>Ceramic crucibles thin walled Nº8 (capacity 320 gr)</td>
                                            <td>80</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>109</td>
                                            <td>Ceramic crucibles thin walled Nº9 (capacity 420 gr)</td>
                                            <td>85</td>
                                            <td>32</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product2 mt-5">
                        <div class="single_product product_toggle2 d-flex flex-column align-items-center">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thick walled</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/2.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_2" id="product_2">
                            <div class="simple-gallery py-3 text-center m-auto">
                                <div class="description col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/2.jpg')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/2.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/2_1.jpg')}}">
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
                                        <p class="text-left pt-2"><span> Product code:</span> 22.75.041107</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Graphite containing crucibles are for fusing of
                                                precious metals and their fusions with fusion
                                                Temperature up to 2000 °C
                                                Perfectly resist to the fire changes of Thermo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-12 d-flex justify-content-center">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>110</td>
                                            <td>Crucibles from ceramic thick-walled Nº1a (capacity 80 gr)</td>
                                            <td>54</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>111</td>
                                            <td>Crucibles from ceramic thick-walled Nº2a (capacity 185 gr)</td>
                                            <td>67</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>112</td>
                                            <td>Crucibles from ceramic thick-walled Nº3a (capacity 380 gr)</td>
                                            <td>81</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>113</td>
                                            <td>Crucibles from ceramic thick-walled Nº4a (capacity 700 gr)</td>
                                            <td>107</td>
                                            <td>37</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product3 mt-5">
                        <div class="single_product product_toggle3 d-flex flex-column align-items-center">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Glass from ceramic</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/3.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_3" id="product_4">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">

                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/3.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/3.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/3_1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/3_2.jpg')}}">
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
                                        <p class="text-left pt-2"><span> Product code:</span> 22.75.100110</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
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
                                    <table class="col-md-10 col-12" border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>115</td>
                                            <td>Glass from ceramics with a cover (350gr) </td>
                                            <td>50</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>116</td>
                                            <td>Glass from ceramics Nº1 (250gr) </td>
                                            <td>48</td>
                                            <td>57</td>
                                        </tr>
                                        <tr>
                                            <td>117</td>
                                            <td>Glass from ceramics Nº2 (500gr) </td>
                                            <td>60</td>
                                            <td>68</td>
                                        </tr>
                                        <tr>
                                            <td>118</td>
                                            <td>Glass from ceramics Nº3 (750gr) </td>
                                            <td>70</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>119</td>
                                            <td>Glass from ceramics Nº4 (1kg) </td>
                                            <td>80</td>
                                            <td>96</td>
                                        </tr>
                                        <tr>
                                            <td>120</td>
                                            <td>Glass from ceramics Nº5 (2kg) </td>
                                            <td>95</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>Glass from ceramics Nº6 (3kg) </td>
                                            <td>100</td>
                                            <td>125</td>
                                        </tr>
                                        <tr>
                                            <td>122</td>
                                            <td>Glass from ceramics Nº7 (4kg) </td>
                                            <td>140</td>
                                            <td>140</td>
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
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Ceramic board for soldering  from 80mm-200*100mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">

                                <img  class="img-fluid" src="{{asset('assets/images/products/4.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_4 " id="product_4">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/4.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4_1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4_2.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4_3.jpg')}}">
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
                                        <p class="text-left pt-2"><span> Product code:</span> 22.75.100110</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <table class=" col-md-10 col-12"  border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter (mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>136</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>137</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <td>138</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>140</td>
                                        </tr>
                                        <tr>
                                            <td>139</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>170</td>
                                        </tr>
                                        <tr>
                                            <td>140</td>
                                            <td>Ceramic board for soldering (200x100)</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product5 mt-5">
                        <div class="single_product product_toggle5 d-flex flex-column align-items-center">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Universal Holder for all size of crucibles 320mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/5.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_5" id="product_5">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/5.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/5.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/5_1.jpg')}}">
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
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">

                                            </p>
                                        </div>
                                    </div>
                                </div>

                                {{--table--}}
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <table class="col-md-10 col-12" border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>141</td>
                                            <td>Handle for crucibles with regulate silder (320mm)</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product6 mt-5">
                        <div class="single_product product_toggle6 d-flex flex-column align-items-center">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3"> Testing stone</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/6.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description product_6" id="product_5">
                            <div class="simple-gallery py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/6.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_2.jpg')}}">
                                            </div>

                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_3.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_4.png')}}">
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

                                        <p class="text-left pt-2"><span> Product code:</span> </p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
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
                                    <table class="col-md-10 col-12 py-3"  border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>142</td>
                                            <td>Testing stone</td>
                                            <td>40</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>143</td>
                                            <td>Testing stone</td>
                                            <td>60</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>144</td>
                                            <td>Testing stone</td>
                                            <td>80</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>145</td>
                                            <td>Testing stone</td>
                                            <td>100</td>
                                            <td>120</td>
                                        </tr>
                                        <tr>
                                            <td>146</td>
                                            <td>Testing stone</td>
                                            <td>120</td>
                                            <td>140</td>
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
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thin walled </h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/1.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_1 px-0" id="product_1">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto ">
                                <div class="description  col-12 text-right align-content-center">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/1.jpg')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid"  src="{{asset('assets/images/products/1_2.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/1_3.jpg')}}">
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
                                        <p class="text-left pt-2"><span> Product code:</span> 22.75.032090</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
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
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>100</td>
                                            <td>Ceramic crucibles thin walled Nº0 (capacity 25 gr)</td>
                                            <td>40</td>
                                            <td>15</td>
                                        </tr>
                                        <tr>
                                            <td>101</td>
                                            <td>Ceramic crucibles thin walled Nº1 (capacity 45 gr)</td>
                                            <td>45</td>
                                            <td>17</td>
                                        </tr>
                                        <tr>
                                            <td>102</td>
                                            <td>Ceramic crucibles thin walled Nº2 (capacity 65 gr)</td>
                                            <td>50</td>
                                            <td>18</td>
                                        </tr>
                                        <tr>
                                            <td>103</td>
                                            <td>Ceramic crucibles thin walled Nº3 (capacity 90 gr)</td>
                                            <td>55</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td>104</td>
                                            <td>Ceramic crucibles thin walled Nº4 (capacity 135 gr)</td>
                                            <td>60</td>
                                            <td>23</td>
                                        </tr>
                                        <tr>
                                            <td>105</td>
                                            <td>Ceramic crucibles thin walled Nº5 (capacity 175 gr)</td>
                                            <td>65</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>106</td>
                                            <td>Ceramic crucibles thin walled Nº6 (capacity 210 gr)</td>
                                            <td>70</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>107</td>
                                            <td>Ceramic crucibles thin walled Nº7 (capacity 260 gr)</td>
                                            <td>75</td>
                                            <td>30</td>
                                        </tr>
                                        <tr>
                                            <td>108</td>
                                            <td>Ceramic crucibles thin walled Nº8 (capacity 320 gr)</td>
                                            <td>80</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>109</td>
                                            <td>Ceramic crucibles thin walled Nº9 (capacity 420 gr)</td>
                                            <td>85</td>
                                            <td>32</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product2">
                        <div class="single_product product_toggle2 d-flex flex-column align-items-center">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Ceramic crucibles thick walled</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/2.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_2 " id="product_2">
                            <div class="simple-gallery-sm py-3  text-center m-auto  ">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/2.jpg')}}" />
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/2.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/2_1.jpg')}}">
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
                                        <p class="text-left pt-2"><span> Product code:</span> 22.75.041107</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">
                                                Graphite containing crucibles are for fusing of
                                                precious metals and their fusions with fusion
                                                Temperature up to 2000 °C
                                                Perfectly resist to the fire changes of Thermo.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="  pt-lg-5 col-lg-12 m-auto d-flex justify-content-center  ">

                                    <table  class="col-md-10 col-12">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>110</td>
                                            <td>Crucibles from ceramic thick-walled Nº1a (capacity 80 gr)</td>
                                            <td>54</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>111</td>
                                            <td>Crucibles from ceramic thick-walled Nº2a (capacity 185 gr)</td>
                                            <td>67</td>
                                            <td>27</td>
                                        </tr>
                                        <tr>
                                            <td>112</td>
                                            <td>Crucibles from ceramic thick-walled Nº3a (capacity 380 gr)</td>
                                            <td>81</td>
                                            <td>32</td>
                                        </tr>
                                        <tr>
                                            <td>113</td>
                                            <td>Crucibles from ceramic thick-walled Nº4a (capacity 700 gr)</td>
                                            <td>107</td>
                                            <td>37</td>
                                        </tr>

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product3">
                        <div class="single_product product_toggle3 d-flex flex-column align-items-center">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Glass from ceramic</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/3.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_3 " id="product_4">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/3.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/3.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/3_1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/3_2.jpg')}}">
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
                                        <p class="text-left pt-2"><span> Product code:</span> 22.75.100110</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
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
                                    <table class="col-md-10 col-12" border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>115</td>
                                            <td>Glass from ceramics with a cover (350gr) </td>
                                            <td>50</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>116</td>
                                            <td>Glass from ceramics Nº1 (250gr) </td>
                                            <td>48</td>
                                            <td>57</td>
                                        </tr>
                                        <tr>
                                            <td>117</td>
                                            <td>Glass from ceramics Nº2 (500gr) </td>
                                            <td>60</td>
                                            <td>68</td>
                                        </tr>
                                        <tr>
                                            <td>118</td>
                                            <td>Glass from ceramics Nº3 (750gr) </td>
                                            <td>70</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>119</td>
                                            <td>Glass from ceramics Nº4 (1kg) </td>
                                            <td>80</td>
                                            <td>96</td>
                                        </tr>
                                        <tr>
                                            <td>120</td>
                                            <td>Glass from ceramics Nº5 (2kg) </td>
                                            <td>95</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <td>121</td>
                                            <td>Glass from ceramics Nº6 (3kg) </td>
                                            <td>100</td>
                                            <td>125</td>
                                        </tr>
                                        <tr>
                                            <td>122</td>
                                            <td>Glass from ceramics Nº7 (4kg) </td>
                                            <td>140</td>
                                            <td>140</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product4">
                        <div class="single_product product_toggle4 d-flex flex-column align-items-center ">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Ceramic board for soldering from 80mm-200*100mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/4.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_4 " id="product_4">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/4.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4_1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4_2.jpg')}}">
                                            </div>
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/4_3.jpg')}}">
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
                                        <p class="text-left pt-2"><span> Product code:</span> 22.75.100110</p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-lg-12 m-auto d-flex justify-content-center  ">
                                    <table class=" col-md-10 col-12"  border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter (mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>136</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>137</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>110</td>
                                        </tr>
                                        <tr>
                                            <td>138</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>140</td>
                                        </tr>
                                        <tr>
                                            <td>139</td>
                                            <td>Ceramic board for soldering</td>
                                            <td>170</td>
                                        </tr>
                                        <tr>
                                            <td>140</td>
                                            <td>Ceramic board for soldering (200x100)</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product5">
                        <div class="single_product product_toggle5 d-flex flex-column align-items-center ">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Universal Holder for all size of crucibles 320mm</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/5.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_5" id="product_5">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto">
                                <div class="description  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/5.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/5.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/5_1.jpg')}}">
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
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
                                        <div class="desc_text">
                                            <p class="text-left p-3 my-3">

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                {{--table--}}
                                <div class="col-lg-12 m-auto d-flex justify-content-center  ">
                                    <table class="col-md-10 col-12" border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>141</td>
                                            <td>Handle for crucibles with regulate silder (320mm)</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product6">
                        <div class="single_product product_toggle6 d-flex flex-column align-items-center ">
                            <div id="product_name"  class="product_name text-center">
                                <h3 class="py-3">Testing stone</h3>
                            </div>
                            <figure class="effect-zoe  mb-0">
                                <img  class="img-fluid" src="{{asset('assets/images/products/6.jpg')}}" alt="img25"/>
                                <div class="bounceInUp p-sm-5 p-0 text-center" >
                                    <i class="far fa-eye"></i>
                                </div>
                            </figure>
                        </div>
                        <div class="product_description-sm product_6" id="product_5">
                            <div class="simple-gallery-sm py-3 col-12 text-center m-auto ">
                                <div class="description-sm  col-12 text-right align-content-center ">
                                    <a  class="btn close_product_desc"><i class="fas fa-times"></i></a>
                                </div>
                                <div class="col-12 d-flex flex-wrap ">
                                    <div class="product_desc_image  col-lg-6 col-md-6 col-12">
                                        <div class="standard" data-zoom=1.7>
                                            <img class="maxi img-fluid" src="{{asset('assets/images/products/6.jpg')}}">
                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_1.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_2.jpg')}}">
                                            </div>

                                        </div>
                                        <div class="mini d-flex justify-content-center mt-2">
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_3.jpg')}}">
                                            </div>
                                            <div class="p-3">
                                                <img  class="img-fluid" src="{{asset('assets/images/products/6_4.png')}}">
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

                                        <p class="text-left pt-2"><span> Product code:</span> </p>
                                        <p class="text-left pb-4" >Manufactured and carried out on it's own Exclusive technology.</p>
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
                                    <table class="col-md-10 col-12 py-3"  border="2" rules="all">
                                        <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>The Name</th>
                                            <th>Diameter(mm)</th>
                                            <th>Height(mm)</th>
                                        </tr>

                                        </thead>
                                        <tbody >
                                        <tr>
                                            <td>142</td>
                                            <td>Testing stone</td>
                                            <td>40</td>
                                            <td>60</td>
                                        </tr>
                                        <tr>
                                            <td>143</td>
                                            <td>Testing stone</td>
                                            <td>60</td>
                                            <td>80</td>
                                        </tr>
                                        <tr>
                                            <td>144</td>
                                            <td>Testing stone</td>
                                            <td>80</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>145</td>
                                            <td>Testing stone</td>
                                            <td>100</td>
                                            <td>120</td>
                                        </tr>
                                        <tr>
                                            <td>146</td>
                                            <td>Testing stone</td>
                                            <td>120</td>
                                            <td>140</td>
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
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.png')}}" alt="">
                </div>
                <div class="section_header py-3">
                    <h3 >Become a Partner</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-12">

                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control "id="email" placeholder="Email Address" name="Email" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control " id="tel" placeholder="Tel" name="tel" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control " id="cname" placeholder="Company Name" name="cname" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" class="form-control " id="site" placeholder="Site Url" name="site">
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
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="" id="" placeholder="Massage" class="form-control " rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button type="button" class="btn  btn-block text-uppercase">Send</button>
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
                    <img src="{{asset('assets/images/catalog_downland.jpg')}}" class="img-fluid" alt="img">

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
                    <img src="{{asset('assets/images/firwatch-fire-icon-orange.png')}}" alt="">
                </div>
                <div class="section_header py-3">
                    <h3 >Contact Us</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control "id="first_name" placeholder="First Name" name="first_name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control "id="last_name" placeholder="Last Name" name="last_name" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" class="form-control "id="contact_email" placeholder="Email Address" name="contact_email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="country" id="country_contact" class="form-control ">
                                    <option value="" class="disabled-selected" disabled selected>Select Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country}}">{{$country}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="" id="Contact" class="form-control " placeholder="Massage" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-3">
                            <button type="button" class="btn  btn-block text-uppercase">Send</button>
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
