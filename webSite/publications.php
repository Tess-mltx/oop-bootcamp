<?php
class Publication{
    public string $title;
    public string $content;
    private string $type;
    private bool $breaking;
    
    public function __construct(string $title, string $content, string $type, bool $breaking){
        $this->title=$title;
        $this->content=$content;
        $this->type=$type;
        $this->breaking=$breaking;
    }

    public function setDisplay(){
        switch ($this->type) {

            case 'Ads':
                $displayTilte =  mb_strtoupper($this->title, 'UTF-8');
                return($displayTilte);
                break;
        
            case 'Vacancy':
                $displayTilte = $this->title . "<a href=> - apply now!</a>";
                return($displayTilte);
                break;

            case 'Article':
                if ($this->type=="Article" && $this->breaking==TRUE){
                    $displayTilte = "<span>BREAKING: </span>" . $this->title;
                } else {
                    $displayTilte = $this->title;
                }
                return($displayTilte);
                break;
            
            default:
                $displayTilte = $this->title;
                return($displayTilte);
                break;
        }

    }
}

$publications = [
    new Publication("The Wonders of Space Exploration", "Embark on a cosmic journey as we delve into the marvels of space exploration. From the captivating mysteries of distant galaxies to the groundbreaking discoveries on our neighboring planets, this article promises an awe-inspiring exploration of the universe. Join us in unraveling the secrets that lie beyond our celestial boundaries, igniting a sense of wonder and curiosity that transcends the limits of our own world.", "Article", FALSE),
    new Publication("Revolutionizing Renewable Energy Technologies", "Discover the cutting-edge innovations driving the renewable energy revolution. In this in-depth exploration, we delve into breakthrough technologies shaping the future of sustainable power. From solar advancements to revolutionary wind turbine designs, this article sheds light on the pivotal role of science and engineering in combating climate change. Join us in understanding how these innovations pave the way for a greener and more sustainable planet.", "Article", TRUE),
    new Publication("Transform Your Home with Smart Tech!", "Elevate your living space with our exclusive deal! Enjoy a 50% discount on state-of-the-art smart home devices. From intelligent lighting to advanced security systems, make your home a haven of modern convenience. Use code SMART50 at checkout for a limited time only. Upgrade your lifestyle today and experience the ease and efficiency of cutting-edge technology.", "Ads", TRUE),
    new Publication("Senior Data Scientist", "Are you passionate about turning data into actionable insights? We're seeking a Senior Data Scientist to join our dynamic team. Dive into challenging projects, leveraging your expertise in machine learning and statistical analysis. Be at the forefront of innovation, contributing to the development of groundbreaking solutions. If you're ready to make a significant impact in the field of data science, apply now! Take the next step in your career and be part of a forward-thinking company committed to pushing the boundaries of technology.", "Vacancy", FALSE),
];