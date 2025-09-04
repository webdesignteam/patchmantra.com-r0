<?php if(OnLoadModal == 'True'){ ?>
<!-- 1st Modal --> 
<div class="modal fade frstModal" id="frstModal" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content" style="border: 8px solid #9f9595; padding: 15px;">
            <div class="modal-header hetero-modal-header" style="border-bottom: none;">
                <h5 class="modal-title">First Modal Title</h5>
                <?php if(OnLoadModal_STEP2 == 'False'){ ?>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <?php } ?>
            </div>
            <div class="modal-body" style="text-align: center;">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla minus, 
                    cum quasi, molestiae asperiores voluptatem fugit laudantium nisi vitae est 
                    molestias delectus minima eaque veniam repellat nostrum aperiam earum eveniet!</p>
                
                <?php if(OnLoadModal_STEP2 == 'True'){ ?><button class="btn btn-default" id="answrBtn" >Next</button><?php } ?>
            </div>
        </div>
    </div>
</div>

<!-- 2nd Modal  -->
<div class="modal fade secondModal" id="secondModal" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content" style="border: 8px solid #9f9595; padding: 15px;">
            <div class="modal-header hetero-modal-header" style="border-bottom: none;">
                <h5 class="modal-title">Second Modal Title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: center;"> 
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Atque sequi eos, fugit numquam aut dignissimos velit necessitatibus 
                    quod ab sapiente officia suscipit ipsum adipisci corporis dicta modi 
                    tempore quasi iste quos! Qui pariatur nulla quis ut sequi explicabo 
                    itaque sunt voluptas unde consectetur eligendi accusamus, 
                    tenetur aspernatur dolore laboriosam cum aut a ipsam veritatis 
                    magnam omnis libero incidunt. Ipsam rerum laudantium repellat 
                    alias sed maxime ratione, quo minima tempora laboriosam ab fugiat 
                    quia voluptatum exercitationem, omnis maiores? A in beatae ipsa dolor! 
                    Minus mollitia iure sit at debitis sed cupiditate unde ab recusandae, 
                    sapiente possimus necessitatibus harum tempora delectus numquam. </p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $(window).on('load',function(){
            if (!sessionStorage.getItem('shown-modal')){
                $('#frstModal').modal({
                    backdrop: 'static',
                    keyboard: false
                })
                sessionStorage.setItem('shown-modal', 'true');
            }
        });
    });
    $("#answrBtn").click(function() {
        $('#frstModal').modal('toggle');
            document.getElementById('body').style.overflowY = 'hidden'    
            // $("#secondModal").modal('show')      
            $('#secondModal').modal({
                backdrop: 'static',
                keyboard: false
            })
    });

    $('#secondModal').on('hidden.bs.modal', function() {
        document.getElementById('body').style.overflowY = 'initial'    
        // $("#optionModal").modal({
        //     backdrop: 'static',
        //     keyboard: false
        // })      
    })
</script>
<?php } ?>