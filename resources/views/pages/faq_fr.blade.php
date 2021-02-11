@extends('layouts.app')

@section('title', 'Foire aux questions')

@section('description', 'Pour chaque molécule incluse sur le site, les références tertiaires (telle que la monographie du produit) ont été consultées afin de voir si des recommandations claires étaient émises sur l’ajustement de dose en présence de cirrhose...')

@section('content')
    @include('layouts.navbar', ['active' => 'faq'])
    <div class="mx-auto container flex flex-grow justify-between items-start pt-4 leading-loose tracking-normal">
        <div class="mx-auto w-full bg-white border-t-8 border-red px-6 py-3 shadow">
            <div class="flex border-b border-grey-light items-center">
                <h1 class="text-3xl leading-none text-red">Foire aux questions</h1>
            </div>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Comment les fiches ont-elles été réalisées?</h3>
            <p class="mt-2">Pour chaque molécule incluse sur le site, les références tertiaires (telle que la monographie du produit) ont été consultées afin de voir si des recommandations claires étaient émises sur l’ajustement de dose en présence de cirrhose. Ces références ont également été consultées afin de trouver les paramètres de pharmacocinétique de la molécule.</p>

            <p class="mt-2">Par la suite, une revue de littérature a été effectuée sur PubMed, Embase et Google afin de répertorier les études de pharmacocinétique ou clinique ayant eu lieu chez les patients souffrant de cirrhose. Les références utilisées dans les articles trouvés ont également été consultées, lorsqu’elles étaient jugées pertinentes.</p>

            <p class="mt-2">Pour chaque référence, la dose du médicament, la voie d’administration, la fréquence d’administration, la durée du traitement, les caractéristiques des patients, les données de pharmacocinétique et la présence d’effets secondaires ont été notées.</p>

            <p class="mt-2">Des revues de traitement ont également été consultées afin d’émettre des recommandations par rapport à la pharmacodynamie des molécules en contexte de cirrhose.</p>

            <p class="mt-2">Par la suite, selon les données rapportées, des recommandations quant à l’utilisation et aux doses des différentes molécules ont été émises.</p>

            <p class="mt-2">Finalement, un groupe de pharmaciens et de médecins a révisé le contenu des fiches médicamenteuses.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">À quoi correspond la légende du tableau résumé se retrouvant au début de chaque fiche?</h3>

            <p class="mt-2">Selon les données rapportées, une recommandation a été émise concernant l’utilisation de chaque molécule selon la degré de la cirrhose.</p>

            <div class="mt-2">
                <span class="securitaire p-2">Sécuritaire</span>
                <p class="md:pl-8">Lorsque les données de pharmacocinétiques ne diffèrent pas des sujets sains ou que la différence n'est pas jugée cliniquement significative et que les patients cirrhotiques exposés à la molécule n’ont pas subi plus d’effets indésirables comparativement aux sujets sains, la recommandation ‘’sécuritaire’’ a été émise.</p>
            </div>

            <div class="mt-2">
                <span class="precaution p-2">Utiliser avec précaution</span>
                <p class="md:pl-8">Lorsqu’une altération significative des paramètres pharmacocinétiques chez les patients cirrhotiques est notée dans les études de pharmacocinétique et/ou que les patients exposés à la molécule ont subi plus d’effets indésirables non sévères, la recommandation ‘’utiliser avec précaution’’ a été émise. Cette recommandation peut également être employée lorsque les données pharmacocinétiques semblent rassurantes, mais qu’elles sont de faible qualité (par exemple : très faible échantillonnage, étude sur dose unique ou faiblesses méthodologiques). Un suivi plus serré des effets indésirables pourrait être nécessaire.</p>
            </div>

            <div class="mt-2">
                <span class="absence-donnees p-2">Absence de données</span>
                <p class="md:pl-8">Aucune donnée pharmacocinétique ou clinique n’a été répertoriée dans la littérature. Il est donc impossible de formuler une recommandation pour cette molécule à ce stade de sévérité de la cirrhose.</p>
            </div>

            <div class="mt-2">
                <span class="non-recommande p-2">Non recommandé</span>
                <p class="md:pl-8">Les études de pharmacocinétiques indiquent une augmentation disproportionnée de l’exposition du médicament chez les patients cirrhotiques ou encore que l’usage de la molécule expose les patients cirrhotiques a un risque significatif d’effet indésirable majeur. Cette recommandation peut également être émise lorsqu’aucun fractionnement de dose n’est possible, dans la mesure où cela était jugé nécessaire. Une molécule alternative devrait être utilisée.</p>
            </div>

            <div class="mt-2">
                <span class="p2 text-grey-darker font-thin">Initier à faible dose</span>
                <p class="md:pl-8">Ce commentaire peut être ajouté lorsque l’exposition à une molécule est fortement augmentée et qu’une dose de traitement initiale réduite est jugée nécessaire. Il est employée pour guider rapidement les utilisateurs du site dans leur prise de décision.</p>
            </div>

            <div class="mt-2">
                <span class="p2 text-grey-darker font-thin">Titrer lentement</span>
                <p class="md:pl-8">Ce commentaire peut être ajouté lorsque la clairance d’une molécule est fortement réduite et qu’une titration plus lente des doses est jugée nécessaire. Il est employée pour guider rapidement les utilisateurs du site dans leur prise de décision.</p>
            </div>

            <div class="mt-2">
                <span class="p2 text-grey-darker font-thin">Autre</span>
                <p class="md:pl-8">Il arrive que des recommandations de doses soient ajoutées à même le tableau. Cela peut être le cas lorsque des monographies le spécifie pour des raisons légales ou encore lorsque des regroupements d’experts se sont positionnés sur l’usage d’une molécule.</p>
            </div>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Chez quel type de patient peut-on utiliser l’information du site?</h3>
            <p class="mt-2">La revue de littérature et les recommandations émises sont applicables pour les patients présentant une cirrhose compensée ou une cirrhose décompensée stable. Elles ne sont pas destinées aux patients souffrant d’une décompensation aiguë de leur maladie hépatique ou d'une hépatite fulminante.</p>

            <h3 class="mt-4 px-2 bg-grey-lightest border-t border-b border-grey-light">Est-ce normal que le site s'affiche mal sur mon navigateur?</h3>
            <p class="mt-2">Présentement, le site supporte uniquement les navigateurs web suivants:</p>
            <ul>
                <li>Apple Safari 11 et versions ultérieures</li>
                <li>Google Chrome 60 et versions ultérieures</li>
                <li>Internet Explorer 11 et versions ultérieures</li>
            </ul>
        </div>
    </div>
    @include('layouts.footer')
@endsection
