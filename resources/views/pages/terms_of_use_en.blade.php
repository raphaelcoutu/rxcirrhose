@extends('layouts.app')

@section('title', 'Mise en garde et conditions d\'utilisation')

@section('description', 'Mise en garde et condition générales d\'utilisation')

@section('hreflang_fr', 'conditions-generales-utilisation')
@section('hreflang_en', 'terms-of-use')

@section('content')
    @include('layouts.navbar', ['active' => ''])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">Disclaimer and Terms of Use</h1>
            </div>

            <p class="mt-2 tracking-tight font-thin text-sm">Careful attention has been given to the preparation of the information contained on this website, which comes from various sources and is provided free of charge. The recommendations on this site are for informational purposes only. It is suggested that they be compared with other bibliographic sources. The authors have made every effort to ensure that the information contained in the documents is accurate at the time of publication. This information is provided 'as is', without representation, warranty, or condition, either express or implied, statutory or otherwise, regarding the following: quality, accuracy, completeness, legality, reliability, effectiveness, or suitability for a particular purpose; uninterrupted access to this website or those linked to it; error-free use of this website or those linked to it; and the absence of computer viruses, other harmful data components, or corrupted information on this website and those linked to it.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">RxCirrhose/RxCirrhosis and its content providers (including the doctors and pharmacists who provide information on this website) have no direct or indirect responsibility, liability, contingent, special, or incidental, related to or connected with the information presented on this website or those linked to it, or its use based on breach of contract or civil tort (including negligence), which includes infringements of property rights, strict liability, breach of warranty, failure to meet essential purposes, fundamental contract breaches, violations of fundamental terms, or otherwise, even after notification of the corresponding possibility.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">The information provided on this website is for informational purposes only and does not constitute medical advice, nor should it be considered reliable in any way. The information is not intended to be comprehensive or detailed regarding the topics discussed. RxCirrhose/RxCirrhosis does not recommend or endorse the use of medications or treatment methods described on this website. The information contained on this website or the websites linked to it should only be used under the supervision of a physician or another qualified professional.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">Any person who uses this information does so at their own risk and, in doing so, agrees to indemnify RxCirrhose/RxCirrhosis and its content providers from any damage, liability, loss, injury, costs, and expenses (including legal fees and expenses) arising from the use of the information presented on this website and the websites linked to it.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">RxCirrhose/RxCirrhosis is not responsible for any damage or injury caused by, including but not limited to, any defect, non-performance, error, omission, interruption, fault, delay in application or transmission, computer virus, or line failure. RxCirrhose/RxCirrhosis or its content providers are not responsible for any damage or injury, including but not limited to special or consequential damages that may result from the use or inability to use the material on this website, even if RxCirrhose/RxCirrhosis or an authorized representative of RxCirrhose/RxCirrhosis has been informed of the possibility of such damages.</p>

            <p class="mt-2 tracking-tight font-thin text-sm">By accessing this website and any of its pages, you agree to be bound by the terms described above. If you do not agree with these terms, please exit this website immediately and do not view any other pages. Changes may be made periodically to this website, these terms, and the information presented without notice. It is your responsibility to review these terms each time you visit this website. Continued use of this website indicates that you agree to be bound by these terms and any changes made to them. References to RxCirrhose/RxCirrhosis in these terms include its team (Raphaël Coutu, Victor Ferreira, Alexandre Mathieu, and Julien Bissonnette) and other representatives or collaborators.</p>

        </div>
    </div>
    @include('layouts.footer')
@endsection
