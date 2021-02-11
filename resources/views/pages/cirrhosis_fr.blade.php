@extends('layouts.app')

@section('title', 'Cirrhose')

@section('description', 'La cirrhose est le stade terminal de la maladie du foie. Celle-ci résulte le plus fréquemment d’une agression chronique des hépatocytes. Subséquemment, le dommage répété mène à la formation de nodules de fibrose, à une modification histologique et à une perte de fonction des hépatocytes pouvant entraîner de nombreuses complications hépatiques et extra-hépatiques...')

@section('content')
    @include('layouts.navbar', ['active' => 'cirrhose'])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">La cirrhose</h1>
            </div>

            <p class="mt-2">La cirrhose est le stade terminal de la maladie du foie. Celle-ci résulte le plus fréquemment d’une agression chronique des hépatocytes. Subséquemment, le dommage répété mène à la formation de nodules de fibrose, à une modification histologique et à une perte de fonction des hépatocytes pouvant entraîner de nombreuses complications hépatiques et extra-hépatiques.
                L’étiologie du mot cirrhose provient du terme grec <i>kirrhos</i> signifiant ‘’orange’’ ou ‘’roux’’, car, à l’autopsie, les nodules hépatiques retrouvés présentent cette couleur.
            </p>
            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Étiologies</h3>
            <p class="mt-2">De nombreuses étiologies peuvent expliquer le dommage hépatique :</p>
            <table class="w-full">
                <tbody>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Virus hépatotropes</td>
                    <td class="border-b-2 border-grey-lightest">hépatite B, hépatite C, hépatite delta</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Métaboliques</td>
                    <td class="border-b-2 border-grey-lightest">hémochromatose, maladie de Wilson, déficit en alpha1-antitrypsine</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Auto-immunes</td>
                    <td class="border-b-2 border-grey-lightest">maladies auto-immunes, cholangite biliaire primitive</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Vasculaires</td>
                    <td class="border-b-2 border-grey-lightest">Budd-Chiari, insuffisance cardiaque droite</td>
                </tr>
                <tr>
                    <td class="bg-grey-lighter font-sans text-sm text-grey-darker border-b border-grey-light">Autres</td>
                    <td>alcool, stéatose non alcoolique, cryptogénique</td>
                </tr>
                </tbody>
            </table>

            <p class="mt-2">En Occident, l’alcool, le syndrome métabolique et l’hépatite C sont les causes principales de cirrhose.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Épidémiologie</h3>
            <p class="mt-2">La prévalence exacte de la maladie n’est pas connue, mais il est estimé qu’environ 1 % de la population mondiale aurait une histologie hépatique compatible. En raison de l’augmentation de la prévalence de la stéatose hépatique, de plus en plus de patients sont diagnostiqués comme étant cirrhotiques.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Présentation clinique</h3>
            <p class="mt-2">Les signes et symptômes de la cirrhose peuvent être légers et peu spécifiques :</p>
            <ul>
                <li>Fatigue, perte d’énergie, perte d’appétit, perte de poids</li>
                <li>Nausées, douleur abdominale</li>
                <li>Hépatomégalie, splénomégalie</li>
                <li>Prurit, ictère, érythème palmaire, angiome stellaire</li>
                <li>Gynécomastie, perte de libido</li>
                <li>Ascite, oedème des membres inférieurs</li>
                <li>Encéphalopathie</li>
            </ul>

            <p class="mt-2">Au niveau des laboratoires, il peut y avoir plusieurs anomalies :</p>
            <ul>
                <li>Hyperbilirubinémie</li>
                <li>Hypoalbuminémie</li>
                <li>Augmentation du temps de prothrombine (RNI augmenté)</li>
                <li>Thrombocytopénie</li>
                <li>Élévation de la phosphatase alcaline et de la gamma glutamyl transpeptidase (GGT)</li>
                <li>Élévation des transaminases (AST et ALT)</li>
            </ul>
            <p class="mt-2">Bien qu'on utilise parfois le terme &laquo;test de fonction hépatique&raquo;, il faut distinguer les tests reflétant la fonction hépatique (RNI, albuminémie et bilirubinémie) de ceux reflétant l’intégrité hépatocellulaire (AST, ALT, phosphatase alcaline, GGT). L'élévation des transaminases ne signifie pas qu’un patient est atteint de cirrhose ou même qu’il présente une altération du fonctionnement hépatique.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Pathophysiologie et complications</h3>
            <p class="mt-2">Le foie agit comme système de filtration du sang et de synthèse de nombreuses molécules. Il est irrigué à la fois par l’artère hépatique et la veine porte. De nombreuses activités métaboliques ont lieu à cet endroit, notamment la néoglucogénèse, la production de protéines, la synthèse de l’urée, le métabolisme oxydatif, la glycolyse et la lipogénèse. Les conduits biliaires sont également reliés à cet organe. C’est ainsi que le foie élimine la bile, qui pourra ensuite s’accumuler dans la vésicule biliaire entre les périodes de repas.</p>

            <p class="mt-2">L’inflammation et la formation de fibrose prenant place durant la période précédant le développement de la cirrhose a plusieurs conséquences. Tout d’abord, le foie devient nodulaire et rigide, s’opposant ainsi au flux sanguin hépatique provenant de la veine porte. Ensuite, le nombre d’hépatocytes fonctionnels diminue, engendrant une réduction de l’activité des différentes fonctions mentionnées ci-haut. On observe également une augmentation de la pression dans la veine porte, phénomène auquel on réfère par le terme d’hypertension portale. Le sang, ayant de la difficulté à atteindre et traverser le foie, est redirigé vers des vaisseaux collatéraux, tels que les varices oesophagiennes. Ainsi, la fonction de détoxication qu’assure normalement le foie est altérée. Des varices peuvent notamment se former au niveau de l’oesophage, de l’estomac, du duodénum et du rectum. Cette complication de la cirrhose est dangereuse, puisque ces vaisseaux peuvent se rompre et entraîner un saignement potentiellement mortel.</p>

            <p class="mt-2">L'hypertension portale peut également causer une rétention hydro-sodée, se présentant sous forme d'oedème des membres inférieurs. Lorsque l’accumulation de liquide prend place au niveau de la cavité péritonéale, c’est ce qu’on appel l’ascite. Il arrive cependant que l’ascite ne résulte pas d’un phénomène d’hypertension portale.</p>

            <p class="mt-2">La péritonite bactérienne spontanée, soit l’infection du liquide d'ascite sans cause directe d'inoculation, est une autre complication de la cirrhose. Elle résulte d’une modification de la flore gastro-intestinale et de l’immunité locale, entraînant une augmentation de la perméabilité mucosale. Le probabilité de translocation bactérienne augmente ainsi. Une fois contaminé, le liquide d’ascite devient un milieu favorable à la prolifération bactérienne. Les patients se présentant à l’urgence pour une péritonite bactérienne sévère peuvent même présenter des signes de sepsis et de l’encéphalopathie hépatique secondaire.</p>

            <p class="mt-2">Une autre complication fréquente de la cirrhose est l’encéphalopathie hépatique. Ce problème neurologique serait causé par l’accumulation de substances usuellement éliminées par le foie, notamment l’ammoniac. L’encéphalopathie hépatique se manifeste à divers degrés de dysfonction cérébrale, pouvant passer de subtiles anomalies de tests psychométriques à des manifestations cliniques évidentes, telles la confusion, la désorientation, la somnolence et de l’astérixis. Dans les cas sévères, le patient peut devenir comateux et inconscient et nécessité une prise en charge sur unité de soins intensifs pour obtenir un support respiratoire.</p>


            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Sévérité de la cirrhose</h3>
            <p class="mt-2">La cirrhose est généralement classifiée comme étant compensée ou décompensée. Elle est dite compensée lorsque le patient ne présente aucun symptôme clinique de sa cirrhose. À l’inverse, on parle de cirrhose décompensée lorsque le patient développe des signes de complication associés, tels l'ictère, l'hémorragie digestive, l'encéphalopathie hépatique ou l'ascite.
            <p class="mt-2">Certains outils ont été développés et validés pour évaluer le pronostic des patients cirrhotiques et classifier le degré de sévérité de la cirrhose. Le score Child-Turcotte-Pugh est le plus fréquemment utilisé à cet effet, puisqu'il est simple d’utilisation et qu’il permet d'établir rapidement le stade de la maladie et le pronostic d'un patient. C’est également pour cette raison qu’il est universellement employé pour formuler les recommandations sur les ajustements de médicaments en cirrhose. Nous vous invitons à consulter la page suivante pour vous familiariser avec cette classification <a href="{{ url('child-pugh') }}" class="text-red-light font-bold no-underline">ici</a>.</>
            <p class="mt-2">Le score MELD, obtenu à partir d'une formule mathématique plus complexe intégrant la créatinine, le RNI et la bilirubine, permet lui aussi d'établir le risque de mortalité à 3 mois d’un patient cirrhotique. Pour sa part, il est utilisé pour prioriser les patients sur la liste d'attente de transplantation hépatique.

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Altérations pharmacocinétiques</h3>
            <p class="mt-2">Tous ces changement et ces complications peuvent affecter le devenir du médicament, autant d’un point de vue pharmacocinétique que pharmacodynamique.</p>

            <p class="mt-2">De nombreux patients avec cirrhose présentent un désordre de la motilité gastro-intestinale, parfois même compliqué par une pullulation bactérienne pouvant altérer l'absorption des médicaments. Dans la plupart des cas, l’absorption sera retardée. Également, au niveau du foie, les enzymes responsables du métabolisme des xénobiotiques peuvent être moins performantes, vu la réduction du nombre et de l’intégrité des hépatocytes. Les réactions de phase I (oxydation et réduction) principalement seront réduites suite à la destruction de l’architecture du foie. En théorie, le cytochrome P450 2C19 serait le premier touché suivi du 1A2, du 2D6 puis du 2E1. Lorsqu’une atteinte cholestatique est présente, l’élimination des médicaments via les voies biliaires sera réduite. D’autre part, les médicaments peuvent contourner le foie via les collatérales s’étant formées en présence d’hypertension portale et ainsi éviter en partie d’être métabolisés. Ce phénomène est d’autant plus important pour les médicaments présentant un fort effet de premier passage hépatique.  En présence d’ascite, la distribution des médicaments peut être altérée, alors que le volume de distribution des médicaments hydrophiles se voit augmenté. Il est également fréquent d’observer une diminution de la synthèse de protéines sériques, ce qui aura un effet sur les médicaments fortement liés aux protéines. L’hypoalbuminémie engendrée par la cirrhose peut provoquer une augmentation des concentrations libres de certaines substances et augmenter leur effet thérapeutique et toxique.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Démarche de prise en charge</h3>
            <p class="mt-2">Les fiches développées sur ce site permettent aux professionnels de la santé d’évaluer rapidement l’usage d’une molécule chez un patient cirrhotique. Toutefois, dans la mesure où
un patient se présente avec une ordonnance d’un produit pour lequel aucune fiche n’est encore disponible, nous proposons l’approche suivante :
</p>
            <div class="flex flex-col justify-center items-center">
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Vérifier les voies d’élimination principales du médicament. Lorsque plus de 20 % du produit passe par le foie, la présence d’hépatopathie peut avoir un impact important.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Calculer le score CTP du patient.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Vérifier si la monographie du médicament propose un ajustement posologique particulier pour le degré d’atteinte hépatique estimé du patient.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Vérifier si des études de pharmacocinétique ont évalué le médicament prescrit chez des patients souffrant de cirrhose (vérifier si l‘état de votre patient est comparable à celui de la population à l’étude).</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Si aucune donnée n’est disponible, vérifier s’il existe un médicament de la même classe pharmacothérapeutique pouvant être utilisé et pour lequel des données d’innocuité sont disponibles?</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Si aucune alternative est possible, vérifier les paramètres pharmacocinétiques du médicament et vérifier si un ajustement de la dose est possible selon l’intervalle posologique recommandé et l’indication.</div>
                @include('svg.arrow', ['class' => 'w-16 h-16 fill-current text-red-light'])
                <div class="bg-grey-lightest rounded border border-grey-light text-grey-darker font-thin shadow px-4 py-2 w-3/4 mt-2 mb-2">Doser les concentrations sériques de la molécule lorsque possible et envisageable.</div>
            </div>
            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Références suggérées</h3>
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
