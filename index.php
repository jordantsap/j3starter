<?php defined('_JEXEC') or die('Restricted access');?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">

<?php include('partials/head.php') ?>

<body>

  <?php include('partials/header.php') ?>

  <?php if($this->countModules('jslideshow')) { ?>
  <div id="slideshow">
    <jdoc:include type="modules" name="jslideshow" />
  </div>
<?php }; ?>


<?php if($this->countModules('jbreadcrumb')) { ?>
  <div class="container">

    <div class="row">

      <div class="col-xs-12">

        <jdoc:include type="modules" name="jbreadcrumb" />

      </div>

    </div>

  </div>
        <?php }; ?>

  <section class="content">

    <div class="container">

      <div class="row">


        <div class="col-xs-12 col-sm-3">
          <jdoc:include type="modules" name="jsidebar" /> sidebar
        </div>
        <?php if($this->countModules('jsidebar')) { ?>
        <?php }; ?>

        <div class="col-xs-12 col-sm-9">
          <jdoc:include type="component" />
        </div>

      </div>

    </div>

  </section>

  <?php if($this->countModules('jcategories')) { ?>
  <div id="categories">
    <?php include('partials/categories.php') ?>
  </div>
  <?php }; ?>

  <?php if($this->countModules('jeyes')) { ?>
  <div id="eyes">
    <?php include('partials/eyes.php') ?>
  </div>
  <?php }; ?>

  <?php if($this->countModules('jpurpose')) { ?>
  <div id="purpose">
    <?php include("partials/purpose.php") ?>
  </div>
  <?php }; ?>
  <?php include("partials/spacecol.php") ?>
  <?php include("partials/spacecol.php") ?>

  <!-- footer contact -->
  <div id="footer">
    <section class=" bd-section-28 bd-page-width bd-tagstyles " id="section28" data-section-title="Container">
      <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-20 bd-no-margins clearfix">
          <div class="bd-container-inner">
            <div class=" bd-layoutcontainer-32 bd-columns bd-no-margins">
              <div class="bd-container-inner">
                <div class="container-fluid">
                  <div class="row ">
                    <div class=" bd-columnwrapper-85 col-lg-5 col-md-5 col-sm-12 col-xs-12">
                      <div class="bd-layoutcolumn-85 bd-column">
                        <div class="bd-vertical-align-wrapper">
                          <a class="bd-iconlink-9 bd-own-margins bd-iconlink " href="https://www.facebook.com/">
                            <span class="bd-icon-55 bd-icon "></span>
                          </a>

                          <p class=" bd-textblock-43 bd-content-element">
                            Τσιμισκή 130 και Φιλικής Εταιρείας γωνία&nbsp;2ος Όροφος, Θεσσαλονίκη, T.K. 54621</p>
                        </div>
                      </div>
                    </div>

                    <div class=" bd-columnwrapper-87 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                      <div class="bd-layoutcolumn-87 bd-column">
                        <div class="bd-vertical-align-wrapper">
                          <a class="bd-iconlink-12 bd-own-margins bd-iconlink " href="https://www.facebook.com/">
                            <span class="bd-icon-60 bd-icon "></span>
                          </a>

                          <p class=" bd-textblock-45 bd-content-element">
                            <a href="tel:+302310282243?template=ofthalmiatros_new&amp;is_preview=on" style="color: white;">+30.2310 282 243</a>
                            <br>
                            <a href="tel:+306944603898?template=ofthalmiatros_new&amp;is_preview=on"
                              style="color: white;">+30.6944 603 898</a>
                          </p>
                        </div>
                      </div>
                    </div>

                    <div class=" bd-columnwrapper-86 col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <div class="bd-layoutcolumn-86 bd-column">
                        <div class="bd-vertical-align-wrapper">
                          <a class="bd-iconlink-14 bd-own-margins bd-iconlink " href="https://www.facebook.com/">
                            <span class="bd-icon-67 bd-icon "></span>
                          </a>

                          <p class=" bd-textblock-47 bd-content-element">
                            anaskos6567@hotmail.com</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div id="copyright">

    <section class=" bd-section-31 bd-page-width bd-tagstyles " id="section31" data-section-title="Container">
      <div class="bd-container-inner bd-margins clearfix">
        <p class=" bd-textblock-3 bd-background-width  bd-content-element">
          <a href="http://company.exnet.gr/index.php/el/" target="_blank" style="color: white;">©Copyright - Κατασκευή &amp; Διαφήμιση Ιστοσελίδων - Exnet Hellas - 1999
            - 2016</a>
        </p>
      </div>
    </section>

  </div>

</body>

</html>
