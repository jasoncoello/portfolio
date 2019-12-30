<?php
  /**
   * Render Portfolio Category
   */
  function renderPortfolioCats() {
    if (PORTFOLIO_CATS) {
      foreach (PORTFOLIO_CATS as $key => $value) {
        ?>
        <li data-filter=".<?php echo $key; ?>"><?php echo $value; ?></li>
        <?php
      }
    }
  } 

  /**
   * Render Portfolio Items
   */
  function renderPortfolios() {
    if (PORTFOLIOS) {
      foreach (PORTFOLIOS as $item) {
        ?>
        <div class="item col-lg-4 col-sm-6 <?php echo $item['category']; ?>">
          <figure>
            <img alt="" src="<?php echo $item['image']; ?>">
            <figcaption>
              <h3><?php echo $item['title']; ?></h3>
              <p><?php echo $item['description']; ?></p>
              <a class="normal-link" target="_blank" href="<?php echo $item['link']; ?>"></a>
            </figcaption>
          </figure>
        </div>
        <?php
      }
    }
  }

  /**
   * Render Skills
   */
  function renderSkills() {
    if (SKILLS) {
      foreach (SKILLS as $skill) {
        ?>

        <div class="row mt-100">  
          <!-- Header Block -->
          <div class="col-md-12">
            <div class="header-box mb-50">
              <h3><?php echo $skill['title']; ?></h3>
            </div>
          </div>
        </div>

        <div class="box-1 skills">
					<div class="row">
            
            <?php 
              $htmlLeft = $htmlRight = '';

              if (isset($skill['items']) && count($skill['items']) > 0) {
                
                $limit = (float)(count($skill['items']) / 2);
                $limitInt = (int) $limit;

                if ($limit == $limitInt) {
                  $limit -= 1;
                } else {
                  $limit = $limitInt;
                }

                for ($i = 0; $i < count($skill['items']); $i++) {
                  $item = $skill['items'][$i];

                  $html = '';
                  $html .= '<div class="skill-item">';
                    $html .= '<h4 class="progress-title">' . $item['title'] . '</h4>';
                    $html .= '<div class="progress">';
                      $html .= '<div class="progress-bar" style="width:98%">';
                        $html .= '<div class="progress-value">' . $item['value'] . '%</div>';
                      $html .= '</div>';
                    $html .= '</div>';
                  $html .= '</div>';

                  if ($i <= $limit) {
                    $htmlLeft .= $html;
                  } else {
                    $htmlRight .= $html;
                  }
                }
              }
            ?>

            <div class="col-lg-6 col-sm-6">
              <?php echo $htmlLeft; ?>
            </div>

            <div class="col-lg-6 col-sm-6">
              <?php echo $htmlRight; ?>
            </div>

            <?php /*
            <div class="col-lg-6 col-sm-6">
              <div class="row">
                <?php
                  if (isset($skill['items']) && count($skill['items']) > 0) {
                    foreach ($skill['items'] as $item) {
                      ?>
                      <!-- Skill Item -->
                      <div class="col-lg-6 col-sm-6">
                        <div class="chart" data-percent="<?php echo $item['value']; ?>" data-bar-color="#fff"> <?php echo $item['value']; ?>% <p><?php echo $item['title']; ?></p></div>
                      </div>
                      <?php
                    }
                  }
                ?>
              </div>
            </div> */ ?>


          </div>
        </div>

        <?php
      }
    }
  }
?>