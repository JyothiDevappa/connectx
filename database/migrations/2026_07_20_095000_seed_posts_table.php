<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Post;

return new class extends Migration
{
    public function up(): void
    {
        // Truncate first to avoid duplication
        Post::truncate();

        $insights = [
            [
                'category' => 'Storytelling',
                'title' => 'Why Every Professional Has a Story Worth Sharing',
                'read_time' => '5 Min Read',
                'slug' => 'why-every-professional-has-story-worth-sharing',
                'image' => 'https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'At Young Chanakya X, we believe that professional expertise is only half the equation. The real differentiator is your story—how you solved problems, navigated challenges, and built trust.',
                'content' => '
                    <p class="lead">At Young Chanakya X, we believe that professional expertise is only half the equation. The real differentiator in today\'s competitive landscape is your story—how you solved problems, navigated challenges, and built trust along the way.</p>
                    <p>Every connector in the YCX Directory has a unique journey. Sharing your experiences doesn\'t just build authority; it humanizes your brand and forms deeper connections with peers. Through our platform, we help professionals articulate their insights to inspire next-generation builders.</p>
                    <blockquote>
                        "Your resume tells people what you did; your story tells them why they should collaborate with you."
                    </blockquote>
                    <p>By articulating your career milestones, operational pivots, and key lessons, you contribute to a shared repository of knowledge that benefits the entire YCX ecosystem. Whether it is overcoming a failed product launch or navigating early-stage funding rounds, these real-world narratives provide the context that dry resumes lack, forming the foundation of high-trust networking.</p>
                    <p>Ultimately, storytelling inside YCX acts as a bridge. It connects seasoned industry leaders who have "been there and done that" with passionate young professionals eager to learn. By sharing these stories, we reduce the trial-and-error phase for new founders, creating a faster path to execution and market success.</p>
                ',
                'author_name' => 'Anjali Sharma',
                'author_role' => 'Founder, YCX Insights',
                'author_avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Networking',
                'title' => 'The Power of Meaningful Connections in Career Growth',
                'read_time' => '4 Min Read',
                'slug' => 'power-of-meaningful-connections-career-growth',
                'image' => 'https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'Traditional networking platforms focus on link volume, but YCX focuses on high-trust connections. Discover how the YCX directory helps build strategic career alignments.',
                'content' => '
                    <p class="lead">Success is rarely a solo endeavor. The trajectory of your career is heavily influenced by the quality of your professional network.</p>
                    <p>Traditional networking platforms focus on link volume, but YCX focuses on high-trust connections. The YCX Connectors Directory enables structured interactions between founders, executives, and mentors, ensuring every outreach leads to productive, long-term collaborations.</p>
                    <blockquote>
                        "One high-trust connection is worth more than a thousand empty contact profiles."
                    </blockquote>
                    <p>When you build connections based on mutual value and shared knowledge rather than transactional requests, your professional network becomes a resilient support system. Within the YCX Connect framework, we pre-vet directory listings so that you reach decision-makers who are actively looking to advise, invest, or partner.</p>
                    <p>This curation saves months of cold outreach and administrative filters. By connecting builders directly with subject-matter experts, we enable rapid problem-solving, opening doors to custom opportunities, joint ventures, and executive placements that are never posted on public job boards.</p>
                ',
                'author_name' => 'Rohan Verma',
                'author_role' => 'Lead System Architect',
                'author_avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Learning',
                'title' => 'Learning Beyond the Classroom: Why Real Experiences Matter',
                'read_time' => '6 Min Read',
                'slug' => 'learning-beyond-classroom-why-real-experiences-matter',
                'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'Traditional business lectures provide frameworks, but actual marketplace entry requires hands-on execution. Explore how YCX internships bridge this learning gap.',
                'content' => '
                    <p class="lead">Traditional business lectures provide frameworks, but actual marketplace entry requires hands-on execution.</p>
                    <p>Through the Young Chanakya X internship programs, we match students directly with scaling businesses. Participants handle real portfolios, launch live campaigns, and manage projects, converting theoretical studies into demonstrable career assets.</p>
                    <p>Real learning happens when the stakes are genuine. When an intern coordinates a product launch, manages a community budget, or writes a live press release, they develop critical thinking and problem-solving skills that textbooks cannot replicate. This hands-on model builds professional confidence and a sense of ownership.</p>
                    <p>Furthermore, YCX internships include direct mentor reviews. At the end of each project, interns sit down with corporate partners to receive feedback on their work, ensuring that their learning curve is continuously rising. This practical experience sets our graduates apart in the job market, equipping them with a portfolio of real accomplishments.</p>
                ',
                'author_name' => 'Priyanka Sen',
                'author_role' => 'Chief Creative Director',
                'author_avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Storytelling',
                'title' => 'The Art of Pitching: Telling a Story That Secures Partners',
                'read_time' => '5 Min Read',
                'slug' => 'art-of-pitching-telling-story-that-secures-partners',
                'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'Learn how startup founders within YCX cohorts structure their investment presentations using authentic narrative arcs rather than generic data listings.',
                'content' => '
                    <p class="lead">A pitch deck is more than slides and financial tables. It is a structured narrative designed to build confidence in your business vision.</p>
                    <p>Within YCX cohorts, we help startup founders structure their investment and partner pitches using narrative arcs instead of standard market summaries. By organizing data around real customer experiences, founders capture attention and build stronger partnerships.</p>
                    <blockquote>
                        "A pitch deck does not close deals; it opens the door to collaborations by establishing a shared narrative."
                    </blockquote>
                    <p>To design an engaging pitch, focus on defining the immediate customer bottleneck, the exact methodology used to resolve it, and the metrics showing growth. This storytelling framework transforms financial data into a compelling vision for future partners.</p>
                ',
                'author_name' => 'Vikram Mehta',
                'author_role' => 'Director of Community Advocacy',
                'author_avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Personal Branding',
                'title' => 'Building a Strong Personal Brand Through Authentic Experiences',
                'read_time' => '5 Min Read',
                'slug' => 'building-strong-personal-brand-through-authentic-experiences',
                'image' => 'https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'Your personal brand is what people say about you when you are not in the room. Learn to leverage authentic problem-solving narratives inside YCX.',
                'content' => '
                    <p class="lead">Your personal brand is what people say about you when you are not in the room. In a noisy world, authenticity is your strongest asset.</p>
                    <p>YCX encourages leaders to build their brand not through curated marketing statements, but through sharing real problem-solving stories. We provide the publishing platforms and network directory visibility to amplify your authentic contributions.</p>
                    <p>A strong personal brand is built on a foundation of consistent value. By contributing insightful case studies, sharing lessons from your projects, and participating in expert panels, you demonstrate your expertise in a tangible, believable way. This builds a reputation that attracts organic opportunities.</p>
                    <p>Through our Connectors Directory, your contributions are highlighted to industry leaders, founders, and partners looking for experts. This visibility transforms your knowledge into a magnetic force for career advancement and business partnerships.</p>
                ',
                'author_name' => 'Anjali Sharma',
                'author_role' => 'Founder, YCX Insights',
                'author_avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Collaboration',
                'title' => 'From Conversations to Collaborations: Creating Opportunities Through Networking',
                'read_time' => '4 Min Read',
                'slug' => 'from-conversations-to-collaborations-creating-opportunities-through-networking',
                'image' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'Conversations are the seeds, but structured collaboration is the harvest. Discover how YCX directory partners transition from talks to live projects.',
                'content' => '
                    <p class="lead">Conversations are the seeds, but structured collaboration is the harvest. Networking is only useful when it translates into active projects.</p>
                    <p>Our connectors use the directory database to find partners for joint ventures, co-hosting community roundtables, and launching integrated marketing campaigns. We turn simple introductions into active career opportunities.</p>
                    <p>True collaboration happens when diverse skill sets align toward a common goal. For example, a tech founder in our directory might partner with a creative media connector to launch an educational campaign, or a social entrepreneur might align with a policy maker to scale an impact initiative.</p>
                    <p>YCX provides the infrastructure and support to facilitate these partnerships, helping you find the right collaborators, structure joint projects, and amplify the results through our network channels, ensuring mutual growth and success.</p>
                ',
                'author_name' => 'Rohan Verma',
                'author_role' => 'Lead System Architect',
                'author_avatar' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Career Growth',
                'title' => 'Why Continuous Learning Is the Key to Long-Term Success',
                'read_time' => '5 Min Read',
                'slug' => 'why-continuous-learning-is-key-to-long-term-success',
                'image' => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'In a fast-evolving economy, the ability to adapt and learn new methodologies is your most critical survival skill. YCX resources build long-term career growth.',
                'content' => '
                    <p class="lead">In a fast-evolving economy, the ability to adapt and learn new methodologies is your most critical survival skill.</p>
                    <p>Young Chanakya X provides resources, partner showcases, and expert panels to keep founders and leaders updated on changing market dynamics, fundraising structures, and marketing strategies.</p>
                    <p>A dedication to continuous learning ensures that you stay relevant as industries shift. Whether it is understanding the implications of new technology, mastering emerging marketing channels, or learning modern leadership frameworks, keeping your knowledge updated is a requirement for long-term growth.</p>
                    <p>Our community roundtables and expert-led webinars provide accessible, high-quality learning opportunities, enabling you to expand your skill set, ask questions to industry experts, and apply new insights directly to your projects.</p>
                ',
                'author_name' => 'Priyanka Sen',
                'author_role' => 'Chief Creative Director',
                'author_avatar' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Entrepreneurship',
                'title' => 'Lessons from Entrepreneurs: Turning Challenges into Opportunities',
                'read_time' => '6 Min Read',
                'slug' => 'lessons-from-entrepreneurs-turning-challenges-into-opportunities',
                'image' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'The path of building a business is defined by pivot points. Read operational insights and pivoting frameworks shared by YCX cohort founders.',
                'content' => '
                    <p class="lead">The path of building a business is defined by pivot points. Every obstacle is an opportunity to restructure and scale.</p>
                    <p>We host roundtables where founders share their operational mistakes, fundraising challenges, and pivots. By sharing these raw lessons, we construct a stronger collective knowledge base for all ecosystem members.</p>
                    <p>Entrepreneurship is a test of resilience. When founders open up about their failures, they demystify the startup journey and provide practical roadmaps for others facing similar challenges. This peer-to-peer knowledge sharing is a cornerstone of our community.</p>
                    <p>Through our panels, you learn how experienced operators managed supply chain disruptions, navigated product-market fit transitions, and negotiated founder agreements. These lessons provide real-world business intelligence that you cannot find in textbook studies.</p>
                ',
                'author_name' => 'Anjali Sharma',
                'author_role' => 'Founder, YCX Insights',
                'author_avatar' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&q=80&w=150',
            ],
            [
                'category' => 'Collaboration',
                'title' => 'The Future of Communities: Connecting People Through Knowledge and Experiences',
                'read_time' => '7 Min Read',
                'slug' => 'future-of-communities-connecting-people-through-knowledge-and-experiences',
                'image' => 'https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&q=80&w=600',
                'excerpt' => 'The future belongs to high-trust micro-communities. Discover the YCX community model linking decentralized cohorts with strategic opportunities.',
                'content' => '
                    <p class="lead">The future belongs to high-trust micro-communities organized around shared values and mutual growth.</p>
                    <p>We are building a decentralized network of local cohorts and specialized directories, proving that value is generated when people share active knowledge and co-build regional opportunities.</p>
                    <p>Modern community models are shift-based. They move away from large, noisy group chats and focus on smaller, structured circles where members form meaningful relationships. By organizing our directories around specific cohorts, YCX ensures focused, high-value interactions.</p>
                    <p>This community-driven approach fosters a culture of mutual support and collective problem-solving. It enables resources, knowledge, and connections to flow freely, helping every member contribute to the growth and resilience of the ecosystem.</p>
                ',
                'author_name' => 'Vikram Mehta',
                'author_role' => 'Director of Community Advocacy',
                'author_avatar' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=150',
            ]
        ];

        foreach ($insights as $insight) {
            Post::create($insight);
        }
    }

    public function down(): void
    {
        Post::truncate();
    }
};
