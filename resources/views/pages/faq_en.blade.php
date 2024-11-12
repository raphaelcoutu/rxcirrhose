@extends('layouts.app')

@section('title', 'Frequently asked questions')

@section('description', 'For each molecule added to the website, tertiary sources (such as drug monographs) were consulted to see if drug dosing recommendations in hepatic impairment...')

@section('hreflang_fr', 'faq')
@section('hreflang_en', 'faq')

@section('content')
    @include('layouts.navbar', ['active' => 'faq'])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">Frequently asked question</h1>
            </div>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">How were the datasheets developed?</h3>
            <p class="mt-2">For each molecule added to the website, tertiary sources (such as drug monographs) were consulted to see if drug dosing recommendations in hepatic impairment were given by the manufacturer. These references were also consulted to find the molecule’s pharmacokinetic parameters.</p>

            <p class="mt-2">Then, a review of the literature was made using PubMed, Embase and Google to find pharmacokinetic and clinical studies including patients with hepatic impairment. The references in the included studies were also consulted.</p>

            <p class="mt-2">For each study included, drug dose, route of administration, dosing frequency, duration of treatment, patients’ characteristics, pharmacokinetic data and reported adverse events were recorded.</p>

            <p class="mt-2">Reviews were also consulted, mainly for the redaction of the pharmacodynamic section of each datasheet, where the use of a molecule is put into perspective in a cirrhotic population.</p>

            <p class="mt-2">Then, according to the data accrued, recommendations on drug use and dosing in hepatic impairment where made by our team.</p>

            <p class="mt-2">Finally, a group of pharmacists and doctors reviewed every datasheet to evaluate the content and the recommendations elaborated.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Legend</h3>

            <p class="mt-2">Based on the available data, recommendations were elaborated for each molecule and for every degree of severity of cirrhosis.</p>

            <div class="mt-2">
                <span class="securitaire p-2">Safe use</span>
                <p class="md:pl-8">If pharmacokinetic data in hepatic impairment does not differ from healthy subjects or if the difference is small and considered not clinically relevant and if no increase in adverse events among cirrhotic patients was reported, the recommendation ‘’Safe use’’ was made.</p>
            </div>

            <div class="mt-2">
                <span class="precaution p-2">Use with caution</span>
                <p class="md:pl-8">When significant changes in the pharmacokinetic parameters were reported in cirrhotic patients and/or if cirrhotic patients presented a higher incidence of non-severe adverse events, the recommendation ‘’Use with caution’’ was made. This recommendation could also be applied when pharmacokinetic data appeared reassuring, but the quality of the studies was considered poor (small sample size, single-dose studies, methodological limitations, etc.) A closer monitoring of patients might be necessary to detect adverse event occurrence.</p>
            </div>

            <div class="mt-2">
                <span class="absence-donnees p-2">No available data</span>
                <p class="md:pl-8">No pharmacokinetic or clinical data could be found. It is therefore impossible to give out recommendations on the use of this molecule in hepatic impairment at this degree of severity of cirrhosis.</p>
            </div>

            <div class="mt-2">
                <span class="non-recommande p-2">Use not recommended</span>
                <p class="md:pl-8">Available data show disproportionate modifications of pharmacokinetic parameters in hepatic impairment or use of this drug in cirrhotic patients carried an increased risk of serious adverse events. This recommendation could also be applied when no fractioning of doses could be made when judged necessary. An alternative should be used.</p>
            </div>

            <div class="mt-2">
                <span class="p2 text-grey-darker font-thin">Initiate at low dose</span>
                <p class="md:pl-8">This comment can be added when the exposition to a certain drug is strongly increased and it is believed a lower initial dose should be used. This comment is used to help clinicians make faster decisions in the care for their patients.</p>
            </div>

            <div class="mt-2">
                <span class="p2 text-grey-darker font-thin">Titrate slowlyt</span>
                <p class="md:pl-8">This comment can be added when drug clearance is greatly reduced and it is believed a slower titration should be undertaken. This comment is used to help clinicians make faster decisions in the care for their patients.</p>
            </div>

            <div class="mt-2">
                <span class="p2 text-grey-darker font-thin">Other</span>
                <p class="md:pl-8">In some instances, specific drug dosage recommendations will be incorporated directly into the table. This information will be added when monographs specify dosages for legal reasons or when a group of experts has given out its own drug dosing recommendations in hepatic impairment for a specific drug.</p>
                <p class="md:pl-8">Also, when data are only available for a more advanced degree of cirrhosis, the recommendation for this stage of cirrhosis will also be applied to the lesser degrees of cirrhosis for the same drug.</p>
            </div>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">For which patients can these recommendations be applied?</h3>
            <p class="mt-2">Our review of literature and recommendations are only applicable to patients with compensated cirrhosis or stable decompensated cirrhosis. They are not meant to be used in the context of acute decompensation of their disease, acute liver failure or fulminant hepatitis.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Is it normal the website doesn’t display properly on my web browser?</h3>
            <p class="mt-2">As of right now, this website only supports the following web browsers :</p>
            <ul>
                <li>Apple Safari 11 and later</li>
                <li>Google Chrome 60 and later</li>
                <li>Internet Explorer 11 and later</li>
            </ul>
        </div>
    </div>
    @include('layouts.footer')
@endsection
