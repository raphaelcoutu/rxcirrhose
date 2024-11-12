@extends('layouts.app')

@section('title', 'Cirrhosis')

@section('description', 'Cirrhosis is the final stage of liver disease. It usually is the result of chronic injury to the hepatocytes. This repeated aggression leads to the formation of fibrotic nodules, to histological modifications and to a loss of function of the hepatocytes, which can lead to numerous hepatic and extrahepatic...')

@section('content')
    @include('layouts.navbar', ['active' => 'cirrhose'])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">Cirrhosis</h1>
            </div>

            <p class="mt-2">Cirrhosis is the final stage of liver disease. It usually is the result of chronic injury to the hepatocytes. This repeated aggression leads to the formation of fibrotic nodules, to histological modifications and to a loss of function of the hepatocytes, which can lead to numerous hepatic and extrahepatic complications.
                The word cirrhosis is derived from the Greek term <i>kirrhos</i>, meaning ‘’orange‘’ or ‘’red‘’ because, during the autopsy, the liver nodules found in the liver present this colour.
            </p>
            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Etiologies</h3>
            <p class="mt-2">There are many causes of chronic hepatic injury :</p>
            <table class="w-full">
                <tbody>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Hepatotropic virus</td>
                    <td class="border-b-2 border-grey-lightest">hepatitis B, hepatitis C, hepatitis delta</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Metabolic</td>
                    <td class="border-b-2 border-grey-lightest">hemochromatosis, Wilson’s disease, alpha1-antitrypsin deficit</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Autoimmune</td>
                    <td class="border-b-2 border-grey-lightest">autoimmune diseases, primary biliary cholangitis</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Vascular</td>
                    <td class="border-b-2 border-grey-lightest">Budd-Chiari, right-sided heart failure</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Others</td>
                    <td>alcohol, non-alcoholic steatosis, cryptogenic</td>
                </tr>
                </tbody>
            </table>

            <p class="mt-2">In western countries, alcohol, metabolic syndrome and hepatitis C are the primary causes of cirrhosis.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Epidemiology</h3>
            <p class="mt-2">The exact prevalence of cirrhosis is unknown, but it is estimated that roughly 1% of the worldwide population is affected. Since hepatic steatosis is on the rise, an increasing amount of diagnoses is expected.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Clinical presentation</h3>
            <p class="mt-2">Signs and symptoms of cirrhosis can be mild and non-specific :</p>
            <ul>
                <li>Fatigue, loss of energy, loss of appetite, weight loss</li>
                <li>Nausea, abdominal pain</li>
                <li>Hepatomegaly, splenomegaly</li>
                <li>Pruritus, jaundice, palmar erythema, stellar angioma</li>
                <li>Gynecomastia, loss of libido</li>
                <li>Ascites, peripheral edema</li>
                <li>Encephalopathy</li>
            </ul>

            <p class="mt-2">Laboratory findings :</p>
            <ul>
                <li>Hyperbilirubinemia</li>
                <li>Hypoalbuminemia</li>
                <li>Prothrombin time prolongation (elevated INR)</li>
                <li>Thrombocytopenia</li>
                <li>Alkaline phosphatase and gamma-glutamyl transpeptidase (GGT) elevation</li>
                <li>Transaminase (AST and ALT) elevation</li>
            </ul>
            <p class="mt-2">Even though the term «liver function tests; LFTs» is often used to refer to a complete liver panel, it is important to distinguish markers of liver function (INR, bilirubin, albumin) from markers of liver injury (AST, ALT, alkaline phosphatase, GGT). Elevated transaminase does not indicate that a patient suffers from cirrhosis or liver impairment.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Pathophysiology and complications</h3>
            <p class="mt-2">The liver acts as a filtration system and contributes to the production of many substances in the body. Its blood supply is supplied by the hepatic artery and the portal vein. Many metabolic functions take place in the liver, notably gluconeogenesis, protein synthesis, urea production, oxidative metabolism, glycolysis and lipogenesis. Biliary ducts also originate from the liver. One of their main purposes is to evacuate bile from the liver, which is then stored in the gallbladder between each meal.</p>

            <p class="mt-2">The inflammation et fibrosis formation taking place in the stages preceding cirrhosis can have multiple consequences. First of all, the liver becomes stiff and full of nodules, obstructing the inflow of blood coming from the portal vein. Then, the amount of functional hepatocytes diminishes, leading to a reduced capacity of the liver to execute its functions. A pressure gradient is also generated in the pre-hepatic circulation, a phenomenon referred to as portal hypertension. The blood, being unable to easily flow through the liver, is redirected towards collateral blood vessels, such as esophageal varices. The blood flowing through these collaterals bypasses the liver, preventing it from being detoxified. Varices can notably develop in the esophagus, the stomach, the duodenum and the rectum. This complication associated with cirrhosis can have devastating consequences, as these blood vessels can rupture and result in a potentially fatal bleeding.</p>

            <p class="mt-2">Portal hypertension can also induce sodium and water retention, leading to peripheral edema. When water retention accumulates in the peritoneal cavity, it is referred to as ascites. However, it is possible that ascites is the result of another problem, and not from cirrhosis.</p>

            <p class="mt-2">Spontaneous bacterial peritonitis (SBP), which is the infection of ascitic fluid without a direct cause of contamination, is another complication of cirrhosis. It is the consequence of an alteration of gut microbiota and local immunity, inducing an increase in permeability of the intestines mucosa. This, in turn, leads to an increased risk of bacterial translocation from the gastrointestinal tract lumen to the peritoneal cavity. Once inoculated, the ascitic fluid becomes a favourable environment for bacterial proliferation. Patients presenting to the emergency department with severe SBP can show signs of sepsis and hepatic encephalopathy (HE).</p>

            <p class="mt-2">HE is another frequent complication of cirrhosis. This neurological problem is believed to originate from the accumulation of substances normally eliminated by the liver, such as ammonia. HE manifests with varying degrees of cerebral dysfunction, ranging from subtle psychometric abnormalities to overt clinical signs, such as confusion, disorientation, drowsiness and asterixis. In more severe cases, patients can become lethargic and unconscious and require a transfer to an intensive care unit for ventilatory support.</p>


            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Cirrhosis severity</h3>
            <p class="mt-2">Cirrhosis is generally classified as compensated or decompensated. At the compensated cirrhosis stage, patients do not exhibit signs or symptoms of complications of cirrhosis. When cirrhosis reaches a certain degree of severity, complications such as icterus, gastrointestinal bleeding, HE or ascites develop and patients become symptomatic. Cirrhosis is then classified as decompensated.</p>
            <p class="mt-2">Various tools have been developed and validated to evaluate a cirrhotic patient’s prognostic and to classify its degree of severity of cirrhosis. The Child-Turcotte-Pugh (CTP) score is one of the most frequently used because of its ease of use and validity in establishing disease stage and patient prognostic. It is also the classification employed by the industry when making recommendations on drug dosing in hepatic impairment in product monographs.  For more information on the Child-Turcotte-Pugh score, we invite you to consult the <a href="{{ url('child-pugh') . '?hl=en' }}" class="text-red-light font-bold no-underline">following page</a>.</p>
            <p class="mt-2">The MELD score, obtained through a more complex mathematical formula integrating creatinine, INR and bilirubin values, estimates the mortality risk at 3 months of any cirrhotic patient. This tool is used to prioritize patients on the liver transplant list.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Pharmacokinetic alterations</h3>
            <p class="mt-2">All the cirrhosis-associated physical changes and complications can have a direct impact on drugs’ pharmacokinetics and pharmacodynamics.</p>

            <p class="mt-2">Many cirrhotic patients have reduced gastrointestinal motility while some of them even suffer from bacterial overgrowth. In most cases, this results in delayed drug absorption. Likewise, liver enzymes responsible for the metabolism of exogenous substances can exhibit a reduced efficacy, because of a reduction in the amount of functioning hepatocytes. Phase I reactions (oxidation and reduction) will primarily be affected by the physiologic changes occurring within the liver (structural changes, fibrosis). Theoretically, cytochrome P450 2C19 activity will be altered first, followed by 1A2, 2D6 and 2E1. When there is cholestatic involvement, medications eliminated through bile might accumulate. Also, when collateral blood vessels develop, drugs can bypass the liver’s metabolic activity and, therefore, expose the patient to heightened dosages. This is even more crucial for drugs that exhibit a high hepatic first pass effect. When ascites develop, the distribution volume of certain drugs will grow, especially for hydrophilic ones. It is also common to observe a reduction in circulating plasma proteins in cirrhotic patients since synthesis by the liver is affected. Albumin being a major one, drugs highly bound will circulate freely in a higher fraction, meaning the effect and toxicity of the drug will be heightened.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Reflective approach</h3>
            <p class="mt-2">The datasheets developed on this website are meant to guide healthcare professionals in rapidly evaluating the usage of certain medications in the care for their cirrhotic patients. However, if a certain drug is not listed on this website, we recommend following these steps :</p>
            <div class="flex flex-col justify-center items-center">
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Identify the drugs’ primary elimination routes (hepatic, renal, etc.) When over 20% of the product is hepatically removed, presence of cirrhosis can have a significant impact.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Calculate the patient’s CTP score</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Consult the product monograph to see if the manufacturer listed recommendations on drug dosing in hepatic impairment.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Search for pharmacokinetic studies of the drug in hepatic impairment (and verify if the included population corresponds to the patient being evaluated).</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">If no data is available, look for alternative drugs in the same therapeutic class for which data in hepatic impairment is available.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">If no alternative is available, analyze the pharmacokinetic properties of the drug and determine if the dosage can and should be adjusted, in regards to the usual dosage range and the indication.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Carry out therapeutic drug monitoring, if possible and relevant.</div>
            </div>
            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Suggested references</h3>
            <ul>
                <li>Poitras, Pierre et coll. L’appareil digestif : Des sciences fondamentales à la clinique. Les Presses de l’Université de Montréal, 2020.</li>
                <li>Tsochatzis EA et coll. Liver cirrhosis. Lancet 2014;17:1749-61.</li>
                <li>Ge PS et coll. Treatment of patients with cirrhosis. N Engl J Med 2016;25:767-77.</li>
                <li>Lewis JH, Stine JG. Review article: prescribing medications in patients with cirrhosis - a practical guide. Aliment Pharmacol Ther. 2013 Jun;37(12):1132-56.</li>
                <li>Ferreira V et coll. L'ajustement des médicaments dans les cas de cirrhose. Québec Pharmacie, 2018.</li>
            </ul>

        </div>
    </div>
    @include('layouts.footer')
@endsection
