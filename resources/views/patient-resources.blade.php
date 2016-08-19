@extends('master')

@section('page_title', 'Recticare')
@section('page_id', 'patient-resources')
@section('canonical')
<link rel="canonical" href="{{ url('/patient-resources') }}" />
@endsection

@section('content')

    <div id="page-header">
        <div class="container padded">
            <div class="half">
                <h1>Patient Resources</h1>
            </div>
            <div class="half">
                <p>“Learn More about the Conditions RectiCare<sup>&reg;</sup> Can Help You With</p>
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
                <li class="tab-link {{ ($section == 'colon-cancer-alliance') ? 'current' : '' }}" data-tab="colon-cancer-alliance">Colon Cancer Alliance</li>
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

                <hr />

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

                <hr />

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
                <h2>Patient Resources</h2>
                <p>Many patients delay or don’t seek treatment because of their lack of knowledge about their disease and its symptoms – or they are too embarrassed to seek help. Research has demonstrated that early screening and treatment of colon and rectal diseases can improve outcomes and survival rates. A number of organizations are committed to the research, education and treatment of these diseases. Below are the links to their Patient Education and Patient Resource Center’s.</p>
                <div class="link-container">

                    <div class="item">
                        <h4>American Society of Colon & Rectal Surgeons</h4>
                        <a href="https://www.fascrs.org/patients" target="_blank">https://www.fascrs.org/patients</a>
                    </div>

                    <div class="item">
                        <h4>American College of Gastroenterology</h4>
                        <a href="http://patients.gi.org" target="_blank"> http://patients.gi.org</a>
                    </div>

                    <div class="item">
                        <h4>American Gastroenterology Association</h4>
                        <a href="http://www.gastro.org/patient-care" target="_blank">http://www.gastro.org/patient-care</a>
                    </div>

                    <div class="item">
                        <h4>The American Congress of Obstetricians and Gynecologists </h4>
                        <a href="http://www.acog.org/Patients/FAQs/Problems-of-the-Digestive-System" target="_blank">http://www.acog.org/Patients/FAQs/Problems-of-the-Digestive-System</a>
                    </div>

                    <div class="item">
                        <h4>International Foundation for Functional Gastrointestinal Disorders </h4>
                        <a href="https://www.iffgd.org" target="_blank">https://www.iffgd.org</a>
                    </div>

                    <div class="item">
                        <h4>Crohn's &amp; Colitis Foundation of America </h4>
                        <a href="http://www.ccfa.org" target="_blank">http://www.ccfa.org</a>
                    </div>

                    <div class="item">
                        <h4>United Ostomy Associations of America</h4> 
                        <a href="http://www.ostomy.org/Home.html" target="_blank">http://www.ostomy.org/Home.html</a>
                    </div>

                    <div class="item">
                        <h4>AboutIBS.org</h4>
                        <a href="http://www.aboutibs.org" target="_blank">http://www.aboutibs.org</a>
                    </div>

                </div>
            </div>
            <div id="colon-cancer-alliance" class="tab-content {{ ($section == 'colon-cancer-alliance') ? 'current' : '' }}">
                <h3>Colon Cancer Alliance</h3>
                <img src="{{ url('/images/resources/cca.jpg') }}" class="pull-left thumb">
                <p>The Colon Cancer Alliance, Inc. is the leading national patient advocacy organization dedicated to increasing screening rates and survivorship. Their mission is to provide hope and support to patients and their families, while saving lives through screening, access, awareness, advocacy and research. Since colorectal cancer affects not only those who are diagnosed, the CCA also offers a variety of resources for friends and family.</p>
                <p>CCA Toll-free Helpline (877) 422-2030</p>
            </div>
            <div id="contact-us" class="tab-content {{ ($section == 'contact-us') ? 'current' : '' }}">
                <h1>Contact Us</h1>
                <p>We welcome any questions, concerns or success stories you may have about RectiCare<sup>&reg;</sup>. To contact us via email, please use our <a href="{{ url('/contact') }}">contact page</a>.</p>
                <p>You can also call or write to us at the following address: </p>

                <address>
                    Ferndale Healthcare<sup>&reg;</sup><br />
                    Inc. 780 W. Eight Mile Rd. <br />
                    Ferndale, MI 48220<br />
                    866.668.7482
                </address>
            </div>

        </div>

    </div>
@endsection
