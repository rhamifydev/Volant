@extends('layouts.app')

@section('title', 'Impressum (Legal Notice) — HOPn | Munich')
@section('meta_description', 'Impressum / Legal notice for Volant and HOPn, Munich. Information according to German statutory requirements (§ 5 DDG).')

@section('content')
<section class="py-16 sm:py-20 border-b border-slate-800/80 bg-grid-pattern relative">
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="text-xs font-mono uppercase tracking-widest text-amber-400">German Legal Notice</span>
        <h1 class="text-4xl font-extrabold text-white tracking-tight">Impressum</h1>
        <p class="text-slate-400 text-sm">Angaben gemäß § 5 DDG (Digitale-Dienste-Gesetz)</p>
    </div>
</section>

<section class="py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 text-slate-300 text-sm leading-relaxed">
        
        <!-- Company Identity Card -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-6">
            <div>
                <h2 class="text-xl font-bold text-white mb-2">Diensteanbieter</h2>
                <p class="text-slate-200 font-semibold">HOPn</p>
                <p>[PLACEHOLDER: Rechtsform z.B. HOPn GmbH in Gründung / UG (haftungsbeschränkt)]</p>
                <p>[PLACEHOLDER: Straße und Hausnummer]</p>
                <p>[PLACEHOLDER: PLZ] München, Deutschland</p>
            </div>

            <div class="pt-4 border-t border-slate-800">
                <h2 class="text-xl font-bold text-white mb-2">Vertreten durch</h2>
                <p>Prof. Dr. Ahmed Ebada (Gründer / Founder)</p>
                <p>[PLACEHOLDER: Weitere Vertretungsberechtigte Geschäftsführer falls zutreffend]</p>
            </div>

            <div class="pt-4 border-t border-slate-800">
                <h2 class="text-xl font-bold text-white mb-2">Kontakt</h2>
                <p>Telefon: [PLACEHOLDER: Telefonnummer z.B. +49 89 12345678]</p>
                <p>E-Mail: [PLACEHOLDER: E-Mail-Adresse z.B. contact@hopn.de]</p>
                <p>Webseite: <a href="{{ route('home') }}" class="text-amber-400 underline">volant.hopn.de</a></p>
            </div>

            <div class="pt-4 border-t border-slate-800">
                <h2 class="text-xl font-bold text-white mb-2">Registereintrag</h2>
                <p>Eintragung im Handelsregister [PLACEHOLDER]</p>
                <p>Registergericht: [PLACEHOLDER: Amtsgericht München]</p>
                <p>Registernummer: [PLACEHOLDER: HRB XXXXXX]</p>
            </div>

            <div class="pt-4 border-t border-slate-800">
                <h2 class="text-xl font-bold text-white mb-2">Umsatzsteuer-Identifikationsnummer</h2>
                <p>Umsatzsteuer-Identifikationsnummer gemäß § 27 a Umsatzsteuergesetz:</p>
                <p class="font-mono text-amber-300">[PLACEHOLDER: DE XXXXXXXXX]</p>
            </div>
        </div>

        <!-- Haftungsausschluss / Disclaimer -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-6">
            <div>
                <h2 class="text-lg font-bold text-white mb-2">Haftung für Inhalte</h2>
                <p class="text-slate-400 text-xs sm:text-sm">
                    Als Diensteanbieter sind wir gemäß § 7 Abs.1 DDG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 DDG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen. Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unberührt.
                </p>
            </div>

            <div class="pt-4 border-t border-slate-800">
                <h2 class="text-lg font-bold text-white mb-2">Haftung für Links</h2>
                <p class="text-slate-400 text-xs sm:text-sm">
                    Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen. Für die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich.
                </p>
            </div>

            <div class="pt-4 border-t border-slate-800">
                <h2 class="text-lg font-bold text-white mb-2">Urheberrecht</h2>
                <p class="text-slate-400 text-xs sm:text-sm">
                    Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielfältigung, Bearbeitung, Verbreitung und jede Art der Verwertung außerhalb der Grenzen des Urheberrechtes bedürfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
