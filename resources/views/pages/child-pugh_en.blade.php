@extends('layouts.app')

@section('title', 'Child-Pugh score')

@section('description', 'The Child-Turcotte-Pugh classification (also known as the Child-Pugh score) is a prognostic tool used in caring for cirrhotic patients. It is validated to predict survival at 1 and 2 years...')

@section('content')
    @include('layouts.navbar', ['active' => 'cirrhose'])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red-500 px-6 py-3 shadow">
            <div class="flex border-b border-gray-400 items-center">
                <h1 class="text-3xl leading-none text-red-500">Child-Pugh score</h1>
            </div>
            <p class="mt-2">The Child-Turcotte-Pugh classification (also known as the Child-Pugh score) is a prognostic tool used in caring for cirrhotic patients. It is validated to predict survival at 1 and 2 years.</p>

            <p class="mt-2">The score is made up of 5 components: bilirubin, albumin, prothrombin time (or INR) and presence of ascites and hepatic encephalopathy. A value of 1 to 3 is awarded to each component. The sum of these values makes up the Child-Turcotte-Pugh score, which can then be interpreted using the reference scale (see below). There are three degrees of severity of cirrhosis: A, B or C, also referred to as mild, moderate, or severe.</p>
            <p class="mt-2">The higher the scorer, the higher the risk of morbidity and mortality associated with cirrhosis.</p>

            <div class="mt-2 w-3/4 mx-auto bg-gray-100 border border-gray-500 px-4 rounded py-2 leading-none">
                <p><span class="font-medium">Score of 5 to 6 points</span> : mild cirrhosis, Child-Pugh A</p>
                <p class="ml-6">1-year survival of 100 %</p>
                <p class="mt-2"><span class="font-medium">Score of 7 to 9 points</span> : moderate cirrhosis, Child-Pugh B</p>
                <p class="ml-6">1-year survival of 80 %</p>
                <p class="mt-2"><span class="font-medium">Score of 10 to 15 points</span> : severe cirrhosis, Child-Pugh C</p>
                <p class="ml-6">1-year survival of 45 %</p>
            </div>
            <p class="mt-4">Reference scale :</p>
            <table>
                <thead>
                <tr class="table-header">
                    <th width="20%"></th>
                    <th width="26%">1 point</th>
                    <th width="26%">2 points</th>
                    <th width="26%">3 points</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Hepatic encephalopathy</td>
                    <td>Absent</td>
                    <td>Mild to moderate (grade 1-2)</td>
                    <td>Severe (grade 3-4)</td>
                </tr>
                <tr>
                    <td>Ascites</td>
                    <td>Absent</td>
                    <td>Moderate</td>
                    <td>Tense or refractory</td>
                </tr>
                <tr>
                    <td>Bilirubin (µmol/L)</td>
                    <td>&lt; 35</td>
                    <td>35-50</td>
                    <td>&gt; 50</td>
                </tr>
                <tr>
                    <td>Albumin (g/L)</td>
                    <td>&gt; 35</td>
                    <td>28 à 35</td>
                    <td>&lt; 28</td>
                </tr>
                <tr>
                    <td>INR</td>
                    <td>&lt; 1.7</td>
                    <td>1.7 à 2.2</td>
                    <td>&gt; 2.2</td>
                </tr>
                </tbody>
            </table>

            <p class="mt-2">Even though it hasn’t been developed and validated to evaluate the liver’s ability to clear drugs, this classification is often used in product monographs by companies to recommend drug dosing in hepatic impairment. Furthermore, the U.S. Food and Drug Administration (FDA) recommends using this score when marketing new drugs.</p>

            <p class="mt-2">The recommendations you will find throughout this website have been elaborated using the Child-Turcotte-Pugh score.</p>
        </div>
    </div>
    @include('layouts.footer')
@endsection
