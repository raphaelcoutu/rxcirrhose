@extends('layouts.app')

@section('title', 'Cirrhose')

@section('description', 'La cirrhose est une maladie du foie causée par une agression chronique des hépatocytes. Ce dommage mène à la formation de fibrose et d’une modification de l’architecture de l’organe pouvant entraîner de nombreuses complications hépatiques et extra-hépatiques...')

@section('content')
    @include('layouts.navbar', ['active' => 'cirrhose'])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full sm:w-3/4 bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h2 class="text-3xl leading-none text-red">La cirrhose</h2>
            </div>

            <p class="mt-2">La cirrhose est une maladie du foie causée par une agression chronique des hépatocytes. Ce dommage mène à la formation de fibrose et d’une modification de l’architecture de l’organe pouvant entraîner de nombreuses complications hépatiques et extra-hépatiques.
                Le mot grec kirrhos signifiant ‘’orange’’ ou ‘’roux’’ a inspiré le nom de la maladie, puisqu’à l’autopsie, les nodules que l’on retrouve au niveau du foie sont de cette couleur.
            </p>
            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Étiologies</h3>
            <p class="mt-2">De nombreuses étiologies peuvent expliquer le dommage hépatique :</p>
            <table class="w-full">
                <tbody>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Virus hépatotropes</td>
                    <td class="border-b-2 border-grey-lightest">hépatite B, hépatite C</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Métaboliques</td>
                    <td class="border-b-2 border-grey-lightest">hémochromatose, maladie de Wilson, déficience en alpha1-antitrypsine</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Immunologiques</td>
                    <td class="border-b-2 border-grey-lightest">maladies auto-immunes, cirrhose biliaire primitive</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Vasculaires</td>
                    <td class="border-b-2 border-grey-lightest">Budd-Chiari, insuffisance cardiaque</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Médicamenteuses</td>
                    <td class="border-b-2 border-grey-lightest">isoniazide, amiodarone, nitrofurantoïne, méthotrexate, etc.</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Autres</td>
                    <td>alcool, stéatose hépatique non alcoolique, cryptogénique</td>
                </tr>
                </tbody>
            </table>

            <p class="mt-2">En Occident, l’alcool et l’hépatite C sont les causes principales de cirrhose.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Épidémiologie</h3>
            <p class="mt-2">La prévalence exacte de la maladie n’est pas connue, mais il est estimé qu’environ 1 % de la population mondiale aurait une histologie hépatique compatible. En raison de l’augmentation de la prévalence de l’hépatite C et de la stéatose hépatique, de plus en plus de patients sont diagnostiqués comme étant cirrhotiques.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Présentation clinique</h3>
            <p class="mt-2">Les signes et symptômes de la cirrhose peuvent être subtils et peu spécifiques :</p>
            <ul>
                <li>Fatigue, perte d’énergie, perte d’appétit, perte de poids</li>
                <li>Nausées, douleur abdominale</li>
                <li>Hépatomégalie, splénomégalie</li>
                <li>Prurit, ictère, érythème palmaire, angiome stellaire</li>
                <li>Gynécomastie, perte de libido</li>
                <li>Ascite, oedème des membres inférieurs</li>
                <li>Encéphalopathie</li>
            </ul>

            <p class="mt-2">Au niveau des laboratoires, il peut y avoir plusieurs perturbations :</p>
            <ul>
                <li>Hypoalbuminémie</li>
                <li>Augmentation du temps de prothrombine (INR augmenté)</li>
                <li>Thrombocytopénie</li>
                <li>Élévation de la phosphatase alcaline et de la gamma glutamyl transpeptidase</li>
                <li>Élévation des transaminases (AST et ALT)</li>
            </ul>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Pathophysiologie et complications</h3>
            <p class="mt-2">Le foie fonctionne habituellement comme un système de filtration du sang. Il est perfusé à la fois par l’artère hépatique et la veine porte. De nombreuses activités métaboliques vont avoir lieu à cet endroit, notamment la néoglucogénèse, la production de protéines, la synthèse de l’urée, le métabolisme oxydatif, la glycolyse et la lipogénèse. Il faut également mentionner que les conduits biliaires sont reliés à cet organe. C’est à cet endroit que le foie va se débarrasser de la bile qui pourra ensuite aller s’accumuler dans la vésicule biliaire.</p>

            <p class="mt-2">La formation de fibrose ayant lieu durant le développement de la cirrhose va avoir plusieurs conséquences. Le foie va devenir nodulé et rigide, le flux sanguin hépatique sera alors obstrué. Les cellules hépatiques seront moins nombreuses et on assiste à une de diminution de leurs différentes fonctions mentionnées ci-haut.
            Il y aura également une augmentation au niveau de la veine porte (hypertension portale). Le sang ayant de la difficulté à traverser ira emprunter des vaisseaux collatéraux. Le rôle de détoxication que le foie assure normalement ne pourra plus être assuré.
            Le passage du sang dans les collatérales va mener à la formation de varices qui peuvent se retrouver au niveau de l’oesophage, de l’estomac, du duodénum et du rectum. Cette complication est dangereuse puisque ces vaisseaux peuvent se rupturer et entraîner un saignement potentiellement mortel.</p>

            <p class="mt-2">De l’ascite peut également se former chez les patients souffrant de cirrhose. Du liquide va s’accumuler au niveau de la cavité péritonéale.</p>

            <p class="mt-2"></>La péritonite bactérienne spontanée peut être une autre complication de la cirrhose. Les patients vont avoir une modification de la flore gastro-intestinale et de l’immunité locale. Le risque de translocation bactérienne va être augmenté. Le péritoine devient alors devenir infecté.

            <p class="mt-2"></>Les patients peuvent également développer de l’encéphalopathie hépatique. Ce problème neurologique serait causé par l’accumulation de substances détoxifiées par le foie (mais qui s’accumulent dans le contexte de cirrhose, notamment l’ammoniac). Les manifestations sont la confusion, la désorientation, la somnolence, l’astérixis. Dans les cas sévère, le patient peut être comateux.


            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Sévérité de la cirrhose</h3>
            <p class="mt-2">Certains score ont été validés pour évaluer le pronostic et classifier la sévérité de la cirrhose. Le score Child-Pugh-Turcotte est souvent utilisé à cet effet. Il est également utilisé pour formuler des recommandations sur les ajustements de médicaments en cirrhose. Nous vous invitons à le consulter <a href="{{ url('child-pugh') }}" class="text-red-light font-bold no-underline">ici</a>.</>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Altérations pharmacocinétiques</h3>
            <p class="mt-2">Toutes ces complications peuvent affecter le devenir du médicament autant du point de vu pharmacocinétique que pharmacodynamique.</p>

            <p class="mt-2">Plusieurs patients souffrant de cirrhose peuvent présenter une gastropathie et leur motilité gastro-intestinale sera diminuée. Dans la plupart des cas, l’absorption des médicaments n’est pas diminuée mais retardée.
            L’effet du premier passage hépatique de certains médicaments peut être diminué chez les patients cirrhotiques. Les enzymes métabolisants normalement les xénobiotiques peuvent être moins performantes vu la réduction du nombre d’hépatocytes. De plus, les médicaments peuvent contourner le foie via les collatérales s’étant formées en présence d’hypertension portale.
            La distribution des médicaments peut également être altérée, surtout pour les patients qui présentent de l’ascite. Le volume de distribution des médicaments hydrophiles peut être augmenté.
            La diminution de la synthèse des protéines va aussi avoir un effet sur la pharmacothérapie. Plusieurs médicaments vont se lier fortement à l’albumine afin d’être transportés à travers le corps. L’hypoalbuminémie peut provoquer une augmentation des concentrations libres de certaines substances et augmenter leur effet thérapeutique et toxique.
            Les réactions de phase I (oxydation et réduction) seront réduites suite à la destruction de l’architecture du foie. En théorie, le cytochrome P450 2C19 serait le premier touché suivi du 1A2, 2D6 puis 2E1.
            Lorsqu’une atteinte cholestatique est présente, l’élimination des médicaments via les voies biliaires sera affectée.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Démarche de prise en charge</h3>
            <p class="mt-2">Sur le site, vous trouverez des recommandations d’utilisation en cirrhose pour certains médicaments. Si jamais un patient se présente avec une ordonnance pour un produit sur lequel nous ne nous sommes pas prononcés, nous proposons l’approche suivante :</p>
            <div class="flex flex-col justify-center items-center">
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Vérifier les voies d’élimination principales du médicament. Lorsque plus de 20 % du produit doit passer par le foie, l’hépatopathie peut avoir un impact important.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Calculer le score CTP du patient.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Vérifier si la monographie du médicament propose un ajustement posologique particulier pour le degré d’atteinte hépatique estimé du patient.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Vérifier si des études de pharmacocinétique ont évalué le médicament prescrit chez des patients souffrant de cirrhose (vérifier si l‘état de votre patient est comparable à celui de la population à l’étude).</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Si aucune donnée n’est disponible, vérifier s’il existe un médicament de la même classe pharmacothérapeutique pouvant être utilisé et pour lequel des données d’innocuité sont disponibles?</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Si aucune alternative est possible, vérifier les paramètres pharmacocinétiques du médicament et vérifier si une modification de la dose est possible selon l’intervalle posologique recommandé et l’indication.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Doser les concentrations sériques de la molécule lorsque possible et envisageable.</div>
            </div>


        </div>
    </div>
    @include('layouts.footer')
@endsection
