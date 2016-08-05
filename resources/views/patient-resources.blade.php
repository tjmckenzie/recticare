@extends('master')

@section('page_title', 'Recticare')
@section('page_id', 'patient-resources')

@section('content')

    <div id="page-header">
        <div class="container padded">
            <div class="half">
                <h1>Patient Resources</h1>
            </div>
            <div class="half">
                <p>Phasellus neque lacus, pellentesque ut leo eget, tincidunt bibendum sem.</p>
            </div>
        </div>
    </div>

    <div class="gradient-background">

        <div class="container padded">

            <ul class="tabs">
                <li class="tabs-menu"><i class="fa fa-bars"></i></li>
                <li class="tab-link {{ (is_null($section) OR $section == 'common-issues') ? 'current' : '' }}" data-tab="common-issues">Common Issues</li>
                <li class="tab-link {{ ($section == 'hemorrhoid-treatment') ? 'current' : '' }}" data-tab="hemorrhoid-treatment">Hemorrhoid Treatment</li>
                <li class="tab-link {{ ($section == 'patient-resource') ? 'current' : '' }}" data-tab="patient-resource">Patient Resources</li>
                <li class="tab-link {{ ($section == 'colon-cancer-alliance') ? 'current' : '' }}" data-tab="colon-cancer-alliance">Colon Cander Alliance</li>
                <li class="tab-link {{ ($section == 'contact-us') ? 'current' : '' }}" data-tab="contact-us">Contact Us</li>
            </ul>

            <div id="common-issues" class="tab-content {{ (is_null($section) OR $section == 'common-issues') ? 'current' : '' }}">
                <h2>Have you been suffering from anal pain or discomfort?</h2>
                <p>Below are a number of common anorectal disorders and their typical symptoms to help you identify the problem you might be experiencing.</p>

                <h3>Hemorrhoids</h3>
                <p>Hemorrhoids are enlarged blood vessels around the anus, which can be internal or external. They are typically caused by constipation, diarrhea, or straining while going to the bathroom. They can also occur because of increased vein pressure or hormone changes during pregnancy.</p>
                <p>Hemorrhoid symptoms include:</p>
                <ul>
                    <li>Painful lumps around the anus</li>
                    <li>Evidence of bright red blood when going to the bathroom</li>
                    <li>Anal itching and/or burning</li>
                    <li>Anal pain while sitting</li>
                </ul>

                <hr />

                <h3>Anal Fissures</h3>
                <p>Anal fissures are small splits or tears that occur along the anal canal, typically caused by passing hard stool, a prolonged period of diarrhea, or from eating foods that create a rough passage through the digestive tract (nuts, seeds, popcorn, etc.).</p>
                <p>Symptoms of anal fissures include:</p>
                <ul>
                    <li>Painful bowel movements with evidence of blood</li>
                    <li>Pain after bowel movement</li>
                    <li>Constipation</li>
                    <li>Visible crack in the skin upon examination</li>
                </ul>

                <hr />

                <h3>Anal Itching / Pruritus Ani</h3>
                <p>Anal itching is a bothersome and sometimes intense itching or burning around the anus. The condition has many causes, including excessive cleanliness; prolonged exposure to moisture; a diet with irritating foods; and irritation from soap, detergents or toilet paper.</p>
                <p>The primary symptoms of anal itching include:</p>
                <ul>
                    <li>Overwhelming urge to scratch, especially at night or after a bowel movement</li>
                    <li>Possible evidence of occasional bleeding</li>
                </ul>

                <hr />

                <h3>Anorectal Abscess</h3>
                <p>An anorectal abscess is a collection of pus in the area of the anus and rectum due to an infection, a blocked gland or a sexually transmitted disease.</p>
                <p>Anorectal abscess symptoms include:</p>
                <ul>
                    <li>Fever</li>
                    <li>Feeling generally unwell</li>
                    <li>Swelling, redness or discomfort around the anus</li>
                    <li>Drainage of pus or fluid from the affected area</li>
                </ul>

                <hr />

                <h3>Anal Fistula</h3>
                <p>An anal fistula is a tract or opening that forms under the skin from the anus to outside of the body or another organ, usually resulting from an anorectal abscess that has drained.</p>
                <p>Initial symptoms of an anal fistula resemble those of anorectal abscesses:</p>
                <ul>
                    <li>Fever</li>
                    <li>Feeling generally unwell</li>
                    <li>Swelling, redness or discomfort around the anus</li>
                    <li>Drainage of pus or fluid from the affected area</li>
                </ul>

                <hr />

                <h3>Condyloma</h3>
                <p>Condylomas — or anal warts — are growths found on the skin around the anus, caused by the human papilloma virus.</p>
                <p>While many people experience no discomfort with anal warts, others suffer from:</p>
                <ul>
                    <li>Minor itching</li>
                    <li> Some bleeding and moisture in the anal canal</li>
                </ul>

                <hr />

                <em>Consult your doctor for treatment options.</em>
            </div>
            <div id="hemorrhoid-treatment" class="tab-content {{ ($section == 'hemorrhoid-treatment') ? 'current' : '' }}">
                <h2>Hemorrhoid Treatment Options</h2>
                <p>Your Physician may recommend a minimally invasive procedure or surgical intervention if conservative treatments fail, or if your hemorrhoids are large, persistently bleed and/or become increasingly painful. Consult your Physician to determine which treatment option is best for your situation.</p>

                <h3>Minimally Invasive Procedures</h3>

                <strong>Rubber Band Ligation</strong>
                <ul>
                    <li>The most commonly used hemorrhoid procedure in the United States</li>
                    <li>Tiny rubber bands are placed around the base of a hemorrhoid to cut off the circulation</li>
                </ul>

                <strong>Injection (Sclerotherapy)</strong>
                <ul>
                    <li>A chemical solution is injected into the hemorrhoidal tissue to shrink the hemorrhoid</li>
                </ul>

                <strong>Coagulation (Infrared, Laser or Bipolar)</strong>
                <ul>
                    <li>Small, bleeding internal hemorrhoids are shrunk using laser, infrared light or heat</li>
                </ul>

                <h3>Surgical Procedures</h3>

                <strong>Hemorrhoid Stapling</strong>
                <ul>
                    <li>Anchors the hemorrhoid in its normal position and blocks blood flow to the hemorrhoidal tissue</li>
                </ul>

                <strong>Hemorrhiod Removal</strong>
                <ul>
                    <li>Complete removal of the hemorrhoidal tissue and the offending blood vessels</li>
                </ul>
            </div>
            <div id="patient-resource" class="tab-content {{ ($section == 'patient-resource') ? 'current' : '' }}">
                <h3>Patient Resources</h3>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="colon-cancer-alliance" class="tab-content {{ ($section == 'colon-cancer-alliance') ? 'current' : '' }}">
                <h3>Colon Cancer</h3>
                Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
            <div id="contact-us" class="tab-content {{ ($section == 'contact-us') ? 'current' : '' }}">
                <h3>Contact Us</h3>
                Sed ultrices eleifend nibh et facilisis. Proin consectetur eu velit at molestie. Mauris nec risus eget diam ullamcorper semper sit amet in augue. Nulla facilisi. Proin posuere ex sit amet sollicitudin luctus. Pellentesque est dui, pellentesque vel aliquet sit amet, auctor et nulla. Nam eget ornare nunc. Ut tincidunt velit eu enim bibendum, sit amet fermentum lectus semper. Praesent auctor ex magna, lobortis molestie tortor finibus id. Proin imperdiet lectus at viverra tincidunt. In tempus turpis nec ligula pharetra, in ultricies lorem venenatis.
            </div>

        </div>

    </div>
@endsection
