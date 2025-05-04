import streamlit as st
import pandas as pd
import numpy as np

# Streamlit app title
st.title("Al Rajhi Bank Survey AI Application")
st.title("NPS Scores")

# File uploader widget
uploaded_file = st.file_uploader("Upload your csv file", type=["csv"])

if uploaded_file is not None:
    try:
        # Read the CSV file
        df = pd.read_csv(uploaded_file)
        
        # Let user select the column for analysis
        st.subheader("---Choose column to get the counts---")
        NPS = st.selectbox("Choose the column containing scores", df.columns)
        
        # Ensure the selected column is numeric
        if df[NPS].dtype in [np.float64, np.int64, np.float32, np.int32]:
            # Count promoters (scores >= 9), passives (scores 7-8), and detractors (scores <= 6)
            detractor_count = (df[NPS] <= 6).sum()
            passive_count = ((df[NPS] == 7) | (df[NPS] == 8)).sum() 
            promoter_count = (df[NPS] >= 9).sum()
            overall_count = df[NPS].notnull().sum()

            # Display results
            st.subheader("Display Results:")
            st.write(f"Detractors Overall Counts: **{detractor_count}**")
            st.write(f"Passives Overall Counts: **{passive_count}**")
            st.write(f"Promoters Overall Counts: **{promoter_count}**")
            st.write(f"Total Counts: **{overall_count}**")
            
            # Find agent column
            agent_column = None
            for col in df.columns:
                if "agent" in col.lower():
                    agent_column = col
                    break
            
            # Detractor Details
            st.subheader("Detractor Details")
            if detractor_count > 0:
                if st.button("Show Agents with Detractor Scores"):
                    # Filter dataframe for detractors (NPS <= 6)
                    detractor_df = df[df[NPS] <= 6]
                    if agent_column:
                        # Display agents with detractor scores
                        st.write(f"Agents with Detractor Scores (NPS ≤ 6):")
                        st.dataframe(detractor_df[[agent_column, NPS]])
                    else:
                        st.warning("No 'Agent' column found in the dataset. Please ensure the dataset includes an agent identifier column.")
            else:
                st.info("No detractor scores (NPS ≤ 6) found in the dataset.")
            
            # Promoter Details
            st.subheader("Promoter Details")
            if promoter_count > 0:
                if st.button("Show Agents with Promoter Scores"):
                    # Filter dataframe for promoters (NPS >= 9)
                    promoter_df = df[df[NPS] >= 9]
                    if agent_column:
                        # Display agents with promoter scores
                        st.write(f"Agents with Promoter Scores (NPS ≥ 9):")
                        st.dataframe(promoter_df[[agent_column, NPS]])
                    else:
                        st.warning("No 'Agent' column found in the dataset. Please ensure the dataset includes an agent identifier column.")
            else:
                st.info("No promoter scores (NPS ≥ 9) found in the dataset.")
            
            # Optional: Display data preview
            st.subheader("Uploaded Data Preview")
            st.dataframe(df.head())
        else:
            st.error(f"Selected column '{NPS}' contains non-numeric data. Please choose a numeric column.")
            
    except Exception as e:
        st.error(f"Error processing file: {str(e)}")
else:
    st.info("Please upload a CSV file to find the counts for the Detractors, Passives, and Promoters.")