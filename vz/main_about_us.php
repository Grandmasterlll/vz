<?php

class main_about_us
{
    public function content_beginning(){
        $con = print_r('
         <div class="p-3 mb-2 bg-white text-dark" >
         <center> <h2 class="mb-3">О НАС</h2> </center>
     <p class="lead" style = "text-indent: 30px; ">    The history of the brand “Antynea” started in 1994 when four young people decided to produce in Minsk, Republic of Belarus, shoulder pads for the needs of garment producers in Belarus and Russia. They were the first and the only producer of such accessories on the territory of the former Soviet Union republics, so the business started to grow. Over years the company made rapid progress, and from a small shoulder pad workshop with 15 people of staff has grown into a big business, including 3 manufacturing sites in Belarus with over 350 people of staff and 10 000 square meters of working areas and the annual turnover about 8,5 million EUR. There is a company in Moscow, Russian federation, and in Warsaw, Poland. All the items produced by our group of companies can be delivered to the customers either by our own transport (we have a team of drivers, 5 big trucks with trailers and four minibuses for local deliveries) or by the transport companies we are cooperating with.
<br><br>  </p>  <p class="lead" style = "text-indent: 30px; "> 
Basing on 23 years of experience in garment and lingerie accessories’ production and having the whole process, starting with foam production, under our own control, we can offer to the customers tailor made service up to door. Our vertical production on modern equipment (that we are also able to produce and adjust by ourselves for our needs ) makes it possible for us to provide wide range of products and service. We follow all modern tendencies and together with application of new technologies, it gives us a possibility to develop new models and patterns according to global trends and customers’ demands. We appreciate our customers and do our best in order to help them improve their production process and save time and fabric. A team of our pattern makers and technicians are always in close contact with the customers helping them to find the best solution for their needs. We provide 100% of quality control of the goods we produce. We work with the reliable suppliers of fabric from all over the world, but all the fabrics before the production have to pass over the quality control department and only the approved fabrics can go further to the production.
<br><br> </p>  <p class="lead" style = "text-indent: 30px; "> 
Over the years of work, we have established partnership relations not only with big textile companies but even with the whole regions. We are regular participants of exhibitions and fairs in Russia and Europe. In order to increase our presence on European market the Antynea group management has decided that for further development not only the sales company with the office in Warsaw, Poland, is enough, but that it is necessary to open a molding department in Poland as well. We have all necessary knowledge and ability to do this and in near future we plan to start the production. Our group of companies united under a common brand “Antynea”.
       <br><br> </p>  </div>
        ');
        return $con;
    }
    public function content_content(){
        $con = print_r('
         <div class="p-3 mb-2 bg-white text-dark" >
         <br>
         <p class="lead" style = "text-indent: 30px; ">
         Мы представляем торговую марку "Антинея". Наша история началась в 1994году. Тогда наше предприятие представляло собой маленький цех численностью 15человек. Однако именно он стал первым в Беларуси местом, где началось производство плечевых накладок.
            </p> <br>
            <div class="row">
            <div class="col-md-1"></div>
              <div class="col-md-5">
                <img src="img/ant1.jpg" style="height: 100%; width: 100%">
                </div>
              <div class="col-md-5">
              <img src="img/ant2.jpg" style="height: 100%; width: 100%">
                </div>
                <div class="col-md-1"></div>
            </div>
            <br>
            <p class="lead" style = "text-indent: 30px; ">
         Прошло уже не одно десятилетие, мы проводили диверсификацию и доросли до крупной швейной фабрики
        </p> <p class="lead" style = "text-indent: 30px; ">
с численностью более 300 человек,
</p> <p class="lead" style = "text-indent: 30px; ">
собственными производственными площадями в 5000 кв.метров,
</p> <p class="lead" style = "text-indent: 30px; ">
экспортируем свою продукцию в 9 стран мира.</p> <br>
           </div>
        ');
        return $con;
    }
    public function content_end(){
        $con = print_r('
          <div class="p-3 mb-2 bg-white text-dark" >
          <p style = "text-indent: 30px; "><strong>"АНТИНЕЯ"ТМ - наш путь развития:</strong></p>
          <p style = "text-indent: 30px; "><strong>1994год - плечевые накладки</strong></p>
          <p style = "text-indent: 30px; "><strong>1996 - манекены</strong></p>
          <p style = "text-indent: 30px; "><strong>2001 - чашки корсетные</strong></p>
          <p style = "text-indent: 30px; "><strong>2002 - дублированные материалы</strong></p>
          <p style = "text-indent: 30px; "><strong>2008 - формованные детали</strong></p>
          <p style = "text-indent: 30px; "><strong>2010 - лента тоннельная</strong></p>
          <p style = "text-indent: 30px; "><strong>2017 - пенополиуретан</strong></p>

<p class="lead" style = "text-indent: 30px; ">
Для расширения производства и удовлетворения требований наших клиентов мы постоянно модернизируем своё оборудование с учётом последних тенденций в области швейных технологий. При закупке сырья акцент делаем прежде всего на его качество. Только качественное сырье может стать гарантом производства качественного продукта. Мы стараемся удовлетворить даже самого требовательного клиента, учитывая индивидуальные потребности каждого.
          </p>
          </div>
        ');
        return $con;
    }
}