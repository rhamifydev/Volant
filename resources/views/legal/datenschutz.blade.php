@extends('layouts.app')

@section('title', 'Datenschutzerklärung (Privacy Policy) — HOPn | Munich')
@section('meta_description', 'Datenschutzerklärung for Volant / HOPn Munich. Information according to EU General Data Protection Regulation (GDPR / DSGVO).')

@section('content')
<section class="py-16 sm:py-20 border-b border-slate-800/80 bg-grid-pattern relative">
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
        <span class="text-xs font-mono uppercase tracking-widest text-cyan-400">German Privacy Policy &bull; DSGVO</span>
        <h1 class="text-4xl font-extrabold text-white tracking-tight">Datenschutzerklärung</h1>
        <p class="text-slate-400 text-sm">Informationen zur Verarbeitung personenbezogener Daten gemäß DSGVO</p>
    </div>
</section>

<section class="py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10 text-slate-300 text-sm leading-relaxed">
        
        <!-- 1. Verantwortlicher -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="text-xl font-bold text-white">1. Name und Kontaktdaten des für die Verarbeitung Verantwortlichen</h2>
            <p>
                Diese Datenschutzerklärung gilt für die Datenverarbeitung durch:
            </p>
            <div class="p-4 rounded-lg bg-slate-950/70 border border-slate-800 text-xs font-mono space-y-1">
                <p class="text-slate-200"><strong>Verantwortlicher:</strong> HOPn</p>
                <p>Vertreten durch: Prof. Dr. Ahmed Ebada</p>
                <p>[PLACEHOLDER: Anschrift / Straße &amp; Hausnummer]</p>
                <p>[PLACEHOLDER: PLZ] München, Deutschland</p>
                <p>E-Mail: [PLACEHOLDER: privacy@hopn.de / contact@hopn.de]</p>
                <p>Telefon: [PLACEHOLDER: Telefonnummer]</p>
            </div>
        </div>

        <!-- 2. Erhebung und Speicherung beim Aufruf der Website -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="text-xl font-bold text-white">2. Erhebung und Speicherung personenbezogener Daten beim Aufruf der Website</h2>
            <p>
                Beim Aufrufen unserer Website werden durch den auf Ihrem Endgerät zum Einsatz kommenden Browser automatisch Informationen an den Server unserer Website gesendet. Diese Informationen werden temporär in einem sog. Server-Logfile gespeichert:
            </p>
            <ul class="list-disc list-inside space-y-1 text-xs text-slate-400">
                <li>IP-Adresse des anfragenden Rechners,</li>
                <li>Datum und Uhrzeit des Zugriffs,</li>
                <li>Name und URL der abgerufenen Datei,</li>
                <li>Website, von der aus der Zugriff erfolgt (Referrer-URL),</li>
                <li>Verwendeter Browser und ggf. das Betriebssystem Ihres Rechners sowie der Name Ihres Access-Providers.</li>
            </ul>
            <p class="text-xs text-slate-400 mt-2">
                Die Rechtsgrundlage für die Datenverarbeitung ist Art. 6 Abs. 1 S. 1 lit. f DSGVO. Unser berechtigtes Interesse folgt aus den Zwecken zur Gewährleistung eines reibungslosen Verbindungsaufbaus und einer komfortablen Nutzung der Website sowie zur Auswertung der Systemsicherheit und -stabilität.
            </p>
        </div>

        <!-- 3. Kontaktformular -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="text-xl font-bold text-white">3. Nutzung unseres Kontaktformulars</h2>
            <p>
                Bei Fragen jeglicher Art bieten wir Ihnen die Möglichkeit, über ein auf der Website bereitgestelltes Formular mit uns Kontakt aufzunehmen. Dabei ist die Angabe des Namens, einer gültigen E-Mail-Adresse, des Unternehmens sowie einer Nachricht erforderlich, damit wir wissen, von wem die Anfrage stammt und um diese beantworten zu können.
            </p>
            <p>
                Die Datenverarbeitung zum Zwecke der Kontaktaufnahme mit uns erfolgt nach Art. 6 Abs. 1 S. 1 lit. b DSGVO (Durchführung vorvertraglicher Maßnahmen) bzw. Art. 6 Abs. 1 S. 1 lit. f DSGVO (berechtigtes Interesse an der Bearbeitung von Kundenanfragen).
            </p>
            <p class="text-xs text-slate-400">
                Die von uns erhobenen personenbezogenen Daten werden in unserer gesicherten Datenbank gespeichert und nach Erledigung der von Ihnen gestellten Anfrage gelöscht, sofern keine gesetzlichen Aufbewahrungspflichten entgegenstehen.
            </p>
        </div>

        <!-- 4. Hosting & Serverstandort -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="text-xl font-bold text-white">4. Hosting der Website</h2>
            <p>
                Diese Website wird gehostet bei:
            </p>
            <div class="p-4 rounded-lg bg-slate-950/70 border border-slate-800 text-xs font-mono space-y-1">
                <p class="text-slate-200"><strong>Hosting-Dienstleister:</strong> [PLACEHOLDER: Name des Hosting-Anbieters z.B. Render Services, Inc. / Cloudflare / Netlify]</p>
                <p>Serverstandort: [PLACEHOLDER: Rechenzentrum Frankfurt am Main, Deutschland / EU]</p>
                <p>Auftragsverarbeitungsvertrag (AVV): [PLACEHOLDER: Es wurde ein Vertrag zur Auftragsverarbeitung gemäß Art. 28 DSGVO abgeschlossen]</p>
            </div>
        </div>

        <!-- 5. Betroffenenrechte -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="text-xl font-bold text-white">5. Ihre Betroffenenrechte</h2>
            <p>Sie haben das Recht:</p>
            <ul class="list-disc list-inside space-y-1.5 text-xs text-slate-300">
                <li>gemäß Art. 15 DSGVO Auskunft über Ihre von uns verarbeiteten personenbezogenen Daten zu verlangen;</li>
                <li>gemäß Art. 16 DSGVO unverzüglich die Berichtigung unrichtiger oder Vervollständigung Ihrer bei uns gespeicherten personenbezogenen Daten zu verlangen;</li>
                <li>gemäß Art. 17 DSGVO die Löschung Ihrer bei uns gespeicherten personenbezogenen Daten zu verlangen;</li>
                <li>gemäß Art. 18 DSGVO die Einschränkung der Verarbeitung Ihrer personenbezogenen Daten zu verlangen;</li>
                <li>gemäß Art. 20 DSGVO Ihre personenbezogenen Daten in einem strukturierten, gängigen und maschinenlesbaren Format zu erhalten (Recht auf Datenübertragbarkeit);</li>
                <li>gemäß Art. 7 Abs. 3 DSGVO Ihre einmal erteilte Einwilligung jederzeit gegenüber uns zu widerrufen;</li>
                <li>gemäß Art. 77 DSGVO sich bei einer Aufsichtsbehörde zu beschweren (z.B. Bayerisches Landesamt für Datenschutzaufsicht, BayLDA).</li>
            </ul>
        </div>

        <!-- 6. Widerspruchsrecht -->
        <div class="glass-panel p-8 rounded-2xl border border-slate-800 space-y-4">
            <h2 class="text-xl font-bold text-white">6. Widerspruchsrecht gemäß Art. 21 DSGVO</h2>
            <p class="text-xs text-slate-400">
                Sofern Ihre personenbezogenen Daten auf Grundlage von berechtigten Interessen gemäß Art. 6 Abs. 1 S. 1 lit. f DSGVO verarbeitet werden, haben Sie das Recht, gemäß Art. 21 DSGVO Widerspruch gegen die Verarbeitung Ihrer personenbezogenen Daten einzulegen, soweit dafür Gründe vorliegen, die sich aus Ihrer besonderen Situation ergeben. Möchten Sie von Ihrem Widerspruchsrecht Gebrauch machen, genügt eine E-Mail an [PLACEHOLDER: privacy@hopn.de].
            </p>
        </div>

        <!-- 7. Aktualität -->
        <div class="pt-4 text-xs text-slate-400 border-t border-slate-800">
            Stand: [PLACEHOLDER: Oktober 2026 / Version 1.0]
        </div>
    </div>
</section>
@endsection
